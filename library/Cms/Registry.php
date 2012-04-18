<?php

namespace Cms;

class Registry
{
    private static $_instance;
    
    public static function getInstance ( $forceNewInstance = false )
    {
        if (null === self::$_instance) self::$_instance = new self();
        return self::$_instance;
    }
}