<?php

class UserIdentity extends CUserIdentity
{
    private $id;

    public function authenticate()
    {
        $user = Account::model()->findByAttributes(array('username' => $this->username));
        
        if ($user === null)
        {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        }
        elseif ($user->password !== $this->password)
        {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        else
        {
            $this->setState('username', $user->username);
            
            $this->id = $user->id;
        
            $this->errorCode = self::ERROR_NONE;
        }
        
        return !$this->errorCode;
    }
    
    public function getId()
    {
        return $this->id;
    }
}
