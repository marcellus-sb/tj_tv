<?php

class PlaylistVideo extends Playlist
{

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'playlist_video';
    }

    public function relations()
    {
        return array(
            'mediaRelators' => array(self::HAS_MANY, 'RelatorVideo', 'idPlaylist',
                    'order' => 'position ASC'),
        );
    }

    
    public function appendMedia($media)
    {
        if ($media instanceof MediaVideo)
        {
            $id = $media->id;
        }
        else
        {
            $id = $media;
        }

        $relator = new RelatorVideo;

        $relator->idVideo = $id;
        $relator->idPlaylist = $this->id;

        $relator->position = count($this->videos);

        $relator->save();

        return $this;
    }
}
