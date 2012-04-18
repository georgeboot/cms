<?php

namespace Cms\Dispatcher;

class Dispatcher
{
	private static $_instance;
	
	public static function getInstance ( $forceNewInstance = false )
	{
		if (null === self::$_instance) self::$_instance = new self();
		return self::$_instance;
	}
	
	public function dispatch ( $route )
	{
		$moduleName       = ucfirst($route[0]);
        $moduleClass      = "\\" . $moduleName . "\\" . $moduleName;
        $controllerFile   = ucfirst($route[1]);
        $controllerName   = "\\" . $moduleName . "\\" . ucfirst($route[1]) . 'Controller';
        $actionName       = lcfirst($route[2]) . 'Action';
        
		require_once BASE_PATH . '/modules/' . $moduleName . DS . $moduleName . '.php';
		require_once BASE_PATH . '/modules/' . $moduleName . DS . 'Controllers' . DS . $controllerFile . '.php';
		
		$module = new $moduleClass( $route );
        $module->init();
		
		$controller = new $controllerName();
		$controller->$actionName();
	}
}
