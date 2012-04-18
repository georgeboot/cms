<?php

namespace Cms\Database;

class Factory
{
	private static $_instance;
	
	public function __construct ()
	{
		// init
	}
	
	public static function getInstance ($type = 'mysql', $forceNewInstance = false)
	{
		if (null === self::$_instance) self::$_instance = new self();
		return self::$_instance;
	}
}