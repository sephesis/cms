<?php

use CMS\Config;

class Database
{
    public static $db;

    public static function connect()
    {
        $pwd = Config::getInstance()->get('database.password');
        $userName = Config::getInstance()->get('database.username');
        self::$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }
}