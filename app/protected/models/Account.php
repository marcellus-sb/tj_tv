<?php

class Account extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'account';
    }
    
    public function beforeSave()
    {
        $this->username = strtolower($this->username);
        
        return true;
    }
}
