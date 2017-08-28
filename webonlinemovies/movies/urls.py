from django.conf.urls import url
from . import views

urlpatterns = [
	#/movies/
    url(r'^$',views.index,name = 'index'),
    #/movies/215/
    url(r'^(?P<movieId>[0-9]+)/$',views.results,name = 'results'),
]