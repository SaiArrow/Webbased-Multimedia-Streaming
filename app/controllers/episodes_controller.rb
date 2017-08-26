class EpisodesController < ApplicationController
	before_action :authenticate_music!, except: [:show]
	before_action :require_permission
	before_action :find_music
	before_action :find_episode, only: [:show, :edit, :update, :destroy]

	def new
		@episode = @music.episodes.new
	end

	def create
		@episode = @music.episodes.new episode_params
		if @episode.save
			redirect_to music_episode_path(@music, @episode)
		else
			render 'new'
		end
	end

	def show
		@episodes = Episode.where(music_id: @music).order("created_at DESC").limit(6).reject { |e| e.id == @episode.id }
	end

	def edit
	end

	def update
		if @episode.update episode_params
			redirect_to music_episode_path(@music, @episode), notice: "Episode was succesfully updated!"
		else
			render 'edit'
		end
	end

	def destroy
		@episode.destroy
		redirect_to root_path
	end

	private

	def episode_params
		params.require(:episode).permit(:title, :description, :episode_thumbnail, :mp3)
	end

	def find_music
		@music = Music.find(params[:music_id])
	end

	def find_episode
		@episode = Episode.find(params[:id])
	end

	def require_permission
		@music = Music.find(params[:music_id])
		if current_music != @music
			redirect_to root_path, notice: "Sorry, you're not allowed to view that page"
		end
	end
end
