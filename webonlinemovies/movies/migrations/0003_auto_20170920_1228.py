# -*- coding: utf-8 -*-
# Generated by Django 1.11.4 on 2017-09-20 06:58
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('movies', '0002_movie_imageurl'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='movie',
            name='duration',
        ),
        migrations.RemoveField(
            model_name='movie',
            name='storyline',
        ),
        migrations.RemoveField(
            model_name='movie',
            name='woodType',
        ),
    ]
