from django.shortcuts import render,get_object_or_404
from django.template import loader
from django.http import HttpResponse,Http404
from django.views import generic
from .models import Movie
# # Create your views here.
# def index(request):
# 	movieList = Movie.objects.all()
# 	return render(request,'movies/index.html',{'movieList':movieList})

# def results(request,movieId):
# 	movie = get_object_or_404(Movie,id = movieId)
# 	return render(request,'movies/results.html',{'movie':movie})

class IndexView(generic.ListView):
	template_name = 'movies/index.html'
	context_object_name = 'movieList' #movieList is returned as object_list by default from Generic Listview class so remane it

	def get_queryset(self):
		return Movie.objects.all() 

class DetailView(generic.DetailView):
	model = Movie
	template_name = 'movies/detail.html'