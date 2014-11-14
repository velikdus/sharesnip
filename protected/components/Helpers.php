<?php

class Helpers
{
    public static function encrypt($text)
    {
        return sha1($text);
    }

    public static function createUrl($url){
        return Yii::app()->params->test . Yii::app()->createUrl($url);
    }
}