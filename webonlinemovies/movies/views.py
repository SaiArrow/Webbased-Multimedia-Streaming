from django.shortcuts import render,get_object_or_404
from django.core.paginator import Paginator,EmptyPage,PageNotAnInteger
from django.template import loader
from django.http import HttpResponse,Http404
from django.views import generic
from .models import Movie
import sys

# # Create your views here.
def index(request):
	movieList = []
	try:
		choiceList = request.GET.getlist('choice')
		print(choiceList)
		if len(choiceList) == 0:
			print(len(choiceList))
			movieList = Movie.objects.all()
		elif 'all' in choiceList:
			print('Conatins all')
			movieList = Movie.objects.all()
		else:
			print(len(choiceList))
			for choice in choiceList:
				try:
					print(choice)
					movieList = movieList | Movie.objects.filter(genre__icontains = choice)
				except:
					movieList = Movie.objects.filter(genre__icontains = choice)
	except:
		movieList = Movie.objects.all()
	
	paginator = Paginator(movieList,12)

	page = request.GET.get('page')
	try:
		movies = paginator.page(page)
	except PageNotAnInteger:
		# If page not an integer deliver first page
		movies = paginator.page(1)
	except EmptyPage:
		# If page is out of range deliver last page
		movies = paginator.page(paginator.num_pages)
	return render(request,'movies/index.html',{'movies':movies})

def results(request):
	query = request.GET.get('search')
	resultList = Movie.objects.filter(movieName__icontains = query) | Movie.objects.filter(production__icontains = query)
	return render(request,'movies/index.html',{'movies':resultList,'pageNo':1})

class DetailView(generic.DetailView):
	model = Movie
	template_name = 'movies/detail.html'

def detail(request,pk):
	movie = Movie.objects.get(pk = pk)
	return render(request,'movies/detail.html',{'movie':movie})