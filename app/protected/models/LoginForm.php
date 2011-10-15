<?php

class LoginForm extends CFormModel
{
    public $username;
    public $password;

    private $_identity;


    public function rules()
    {
        return array(
            array('username, password', 'required'),
        );
    }

    public function login()
    {
        $this->username = trim(strtolower($this->username));
    
        if ($this->_identity === null)
        {
            $this->_identity = new UserIdentity($this->username,$this->password);
            $this->_identity->authenticate();
        }
        
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE)
        {
            Yii::app()->user->login($this->_identity);
            return true;
        }
        
        $this->addError('wronglogin', 'Usuário e senha incorretos.');
        return false;
    }
}
