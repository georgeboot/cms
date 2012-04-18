<?php

namespace Cms\Event;

class FrameworkEvent
{
    private static $_instance;
    
    public static function getInstance ( $forceNewInstance = false )
    {
        if (null === self::$_instance) self::$_instance = new self();
        return self::$_instance;
    }
    
    public function fire ( $eventName )
    {
        //echo "Event {$eventName} fired up!" . PHP_EOL;
    }
}