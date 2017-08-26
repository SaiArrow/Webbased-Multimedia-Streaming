class AddAttachmentThumbnailToMusics < ActiveRecord::Migration[5.0]
  def self.up
    change_table :musics do |t|
      t.attachment :thumbnail
    end
  end

  def self.down
    remove_attachment :musics, :thumbnail
  end
end
