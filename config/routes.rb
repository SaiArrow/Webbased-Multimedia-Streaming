Rails.application.routes.draw do

  devise_for :musics

  resources :musics, only: [:index, :show] do
  	resources :episodes
  end

  authenticated :music do
  	root 'musics#dashboard', as: "authenticated_root"
  end

  root 'welcome#index'
end
