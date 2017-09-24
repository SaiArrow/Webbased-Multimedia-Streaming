from django.shortcuts import render,get_object_or_404, redirect
from django.core.paginator import Paginator,EmptyPage,PageNotAnInteger
from django.template import loader
from django.http import HttpResponse,Http404
from django.contrib.auth import authenticate,login as django_login,logout as django_logout
from django.views import generic
from django .views.generic import View
from django.conf import settings
from .models import Movie
from .forms import RegisterForm
import sys

# # Create your views here.
def index(request):
	if not request.user.is_authenticated:
		return redirect('movies:login')
	
	movieList = []
	try:
		choiceList = request.GET.getlist('choice')
		print(choiceList)
		if len(choiceList) == 0 or 'all' in choiceList:
			print(len(choiceList))
			choiceList = ['all']
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
	return render(request,'movies/index.html',{'movies':movies,'choiceList':choiceList})

def results(request):
	query = request.GET.get('search')
	movieList = Movie.objects.filter(movieName__icontains = query) | Movie.objects.filter(production__icontains = query)
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

def detail(request,pk):
	if not request.user.is_authenticated:
		return redirect('movies:login')	

	movie = Movie.objects.get(pk = pk)
	genre = movie.genre
	genreList = genre.split(';')
	movieList = []
	print(genreList)
	for genre in genreList:
		try:
			movieList = movieList | Movie.objects.filter(genre__icontains = genre)
		except:
			movieList = Movie.objects.filter(genre__icontains = genre)
	
	movieList = movieList.exclude(pk = movie.pk)

	paginator = Paginator(movieList,8)
	page = request.GET.get('page')
	try:
		movies = paginator.page(page)
	except PageNotAnInteger:
		# If page not an integer deliver first page
		movies = paginator.page(1)
	except EmptyPage:
		# If page is out of range deliver last page
		movies = paginator.page(paginator.num_pages)

	return render(request,'movies/detail.html',{'movie':movie,'movies':movies})

class LoginFormView(View):
	template_name = 'movies/login.html'

	def get(self,request):
		return render(request,self.template_name)

	def post(self,request):
		username = request.POST['username']
		password = request.POST['password']
		
		user = authenticate(username = username,password = password)
		print(user)
		if user is not None:
			print('Not none',user)
			if  user.is_active:
				print('Active',user)
				django_login(request,user)
				return redirect("movies:index")
		else:
			print('Form is not valid')
			return render(request,self.template_name) 			

def logout(request):
	if request.user.is_authenticated:
		print('User is currently logged in and is requesting logout')
		django_logout(request)
		return redirect('movies:login')
	else:
		return redirect('movies:login')

class RegisterFormView(View):
	form_class = RegisterForm
	template_name = 'movies/register.html'

	def get(self,request):
		form = self.form_class(None)
		return render(request,self.template_name,{'form':form})

	def post(self,request):
		form = self.form_class(request.POST)

		if form.is_valid():
			user = form.save(commit = False)
			username = form.cleaned_data['username']
			password = form.cleaned_data['password']
			email = form.cleaned_data['email']
			print(username,email,password)
			user.set_password(password)
			user.save()

			user = authenticate(username = username, password = password)
			print(user)
			if user is not None:
				print('Not none',user)
				if  user.is_active:
					print('Active',user)
					django_login(request,user)
					return redirect("movies:index")
		return render(request,self.template_name,{'form':form})