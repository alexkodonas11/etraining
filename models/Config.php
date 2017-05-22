<?php

class Config
{
    // this is public to allow better Unit Testing
    public static $config;
    

    public static function get($key)
    {        
        $arr['base_dir']="C:/xampp/htdocs/etraining/";
        $arr['base_url']="http://localhost:81/etraining/";
        self::$config = $arr;


        return self::$config[$key];
    }
}