from django.conf.urls import url
from . import views

app_name = 'movies'
urlpatterns = [
	#/movies/
	url(r'^$', views.index, name = 'index'),
    url(r'^login/$', views.LoginFormView.as_view(), name = 'login'),
    url(r'^register/$',views.RegisterFormView.as_view(),name = 'register'),
    url(r'^main/$', views.index, name = 'index'),
    url(r'^(?P<pk>[0-9]+)/$',views.detail,name = 'detail'),
    url(r'^results/$',views.results,name = 'results'),
    url(r'^logout/$',views.logout,name="logout"),
]