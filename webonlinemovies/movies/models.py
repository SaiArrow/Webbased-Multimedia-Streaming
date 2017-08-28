from django.db import models

# Create your models here.
class Movie(models.Model):
	movieName = models.CharField(max_length = 100)
	releaseYear = models.CharField(max_length = 10)
	production = models.CharField(max_length = 100)
	storyline = models.CharField(max_length = 500)
	genre = models.CharField(max_length = 30)
	duration = models.BigIntegerField(default = 0)
	imageURL = models.CharField(max_length = 1000,default = "http://www.mvies.com")
	movieURL = models.CharField(max_length = 1000)
	woodType = models.CharField(max_length = 20)
	views = models.BigIntegerField(default = 0)
	likes = models.BigIntegerField(default = 0)
	dislikes = models.BigIntegerField(default = 0)

	def __str__(self):
		return self.movieName + "__" + self.releaseYear