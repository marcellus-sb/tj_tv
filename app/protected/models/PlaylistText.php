<?php

class PlaylistText extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'playlist_text';
    }
    
    public function relations()
    {
        return array(
            'mediaRelators' => array(self::HAS_MANY, 'RelatorText', 'idPlaylist',
                    'order' => 'position ASC'),
        );
    }
    
    public function appendMedia($media)
    {
        if ($media instanceof MediaText)
        {
            $id = $media->id;
        }
        else
        {
            $id = $media;
        }

        $relator = new RelatorText;

        $relator->idVideo = $id;
        $relator->idPlaylist = $this->id;

        $relator->position = count($this->videos);
        
        if (!empty($media->length))
        {
            $relator->length = $media->length;
        }

        $relator->save();

        return $this;
    } 
}
