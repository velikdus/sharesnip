<?php

class User extends CActiveRecord
{
    public $password;
    public $password_repeat;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'o_users';
    }

    public function rules()
    {
        return array(
            array('username,email,password','required'),
            array('email','email'),
            array('email,username','unique'),
            array('password','compare'),
            array('password_repeat','safe'),
        );
    }

    protected function beforeValidate()
    {
        parent::beforeValidate();
        $this->salt = uniqid();
        $this->crypted_password = Helpers::encrypt($this->password . $this->salt);
        return true;
    }
}