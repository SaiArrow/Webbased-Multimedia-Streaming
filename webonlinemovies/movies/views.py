from django.shortcuts import render,get_object_or_404
from django.template import loader
from django.http import HttpResponse,Http404
from .models import Movie
# Create your views here.
def index(request):
	movieList = Movie.objects.all()
	return render(request,'movies/index.html',{'movieList':movieList})

def results(request,movieId):
	movie = get_object_or_404(Movie,id = movieId)
	return render(request,'movies/results.html',{'movie':movie})