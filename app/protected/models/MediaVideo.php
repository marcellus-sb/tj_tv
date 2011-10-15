<?php

class MediaVideo extends Media
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'video';
    }
}
