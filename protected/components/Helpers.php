<?php

class Helpers
{
    const SUCCESS_SIGNED_UP_MSG = 'You have been signed up successfully';

    public static function encrypt($text)
    {
        return sha1($text);
    }

    public static function createUrl($url){
        return Yii::app()->params->test . Yii::app()->createUrl($url);
    }

    public static function getSuccessSignupMessage()
    {
        return self::SUCCESS_SIGNED_UP_MSG;
    }
}