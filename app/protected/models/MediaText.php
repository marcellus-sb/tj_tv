<?php

class MediaText extends Media
{
    public $length;
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'text';
    }
}
