class MusicsController < ApplicationController
	before_action :find_music, only: [:show, :dashboard]
	before_action :find_episode, only: [:show, :dashboard]

	def index
		@musics = Music.all.order("created_at DESC").paginate(:page => params[:page], :per_page => 12)
	end

	def show
	end

	def dashboard
	end

	private

	def find_episode
		@episodes = Episode.where(music_id: @music).order("created_at DESC").paginate(:page => params[:page], :per_page => 5)
	end

	def find_music
		if params[:id].nil?
			@music = current_music
		else
			@music = Music.find(params[:id])
		end
	end
end
