<?php

class UserIdentity extends CUserIdentity
{
	private $id;

	public function authenticate()
	{
		/*$users=array(
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/

		$record=Usuario::model()->findByAttributes(array('email'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id=$record->id;
            $this->setState("roles", $record->roles);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
	}

	public function getId(){
        return $this->id;
    }
}