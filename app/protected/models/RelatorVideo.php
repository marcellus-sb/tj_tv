<?php

class RelatorVideo extends CActiveRecord
{

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'playlist_relator_video';
    }

    public function relations()
    {
        return array(
            'video' => array(self::BELONGS_TO, 'MediaVideo', 'idVideo'),
            'playlist' => array(self::BELONGS_TO, 'PlaylistVideo', 'idPlaylist'),
        );
    }

}
