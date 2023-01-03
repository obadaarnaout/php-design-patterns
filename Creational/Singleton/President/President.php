<?php

namespace Creational\Singleton\President;

class President
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance){
            return new President;
        }
        return self::$instance;
    }
}