from django.shortcuts import render,get_object_or_404
from django.core.paginator import Paginator,EmptyPage,PageNotAnInteger
from django.template import loader
from django.http import HttpResponse,Http404
from django.views import generic
from .models import Movie

# # Create your views here.
def index(request):
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

class IndexView(generic.ListView):
	template_name = 'movies/index.html'
	context_object_name = 'movieList' #movieList is returned as object_list by default from Generic Listview class so remane it

	def get_queryset(self):
		return Movie.objects.all() 

class DetailView(generic.DetailView):
	model = Movie
	template_name = 'movies/detail.html'