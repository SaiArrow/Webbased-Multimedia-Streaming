class AddAttributesToMusic < ActiveRecord::Migration[5.1]
  def change
    add_column :musics, :title, :string
    add_column :musics, :description, :text
    add_column :musics, :itunes, :string
    add_column :musics, :stitcher, :string
    add_column :musics, :musicbay, :string
  end
end
