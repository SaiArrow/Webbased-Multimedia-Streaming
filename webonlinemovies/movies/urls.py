from django.conf.urls import url
from . import views

app_name = 'movies'
urlpatterns = [
	#/movies/
    url(r'^$',views.IndexView.as_view(),name = 'index'),
    #/movies/215/
    url(r'^(?P<pk>[0-9]+)/$',views.DetailView.as_view(),name = 'detail'),
]