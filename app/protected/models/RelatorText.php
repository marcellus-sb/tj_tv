<?php

class RelatorText extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'playlist_relator_text';
    }
    
    public function relations()
    {
        return array(
            'text' => array(self::BELONGS_TO, 'MediaText', 'idText'),
            'playlist' => array(self::BELONGS_TO, 'PlaylistText', 'idPlaylist'),
        );
    }
}
