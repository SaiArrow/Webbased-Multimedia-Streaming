from django.conf.urls import url
from . import views

app_name = 'movies'
urlpatterns = [
	#/movies/
    url(r'^$', views.index, name = 'index'),
    url(r'^(?P<pk>[0-9]+)/$',views.detail,name = 'detail'),
    url(r'^results/$',views.results,name = 'results'),
]