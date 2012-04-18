<?php

namespace Cms;

class Application
{
	private $_router, $_config, $_database, $_dispatcher, $_renderer;
	
	public function __construct ()
	{
		// define some constants
		define('DS', DIRECTORY_SEPARATOR);
        define('BASE_PATH_LIB', BASE_PATH . DS . 'library');
        
		// register autoloader
		spl_autoload_register('Cms\Loader::autoLoad');
	}
	
	/**
     * Bootstrap the application
     * 
     * Load evertyhing needed
     */
    public function bootstrap ()
	{
		// load all libraries
		// as: init database, router, Config, etc.
		
		// singleton implementation
		$this->_config 		= Config::getInstance();
		$this->_database 	= Database\Factory::getInstance();
		$this->_router 		= Router\Router::getInstance();
		$this->_dispatcher	= Dispatcher\Dispatcher::getInstance();
		$this->_renderer	= View\Renderer::getInstance();
	}
	
	public function run ()
	{
		/**
		 * Route the application
		 */
		$this->_router->initRoute();
		
		/**
		 * dispatch the request
		 */
		$this->_dispatcher->dispatch( $this->_router->getRoute() );
		
		/**
		 * Render the template
		 */
		$this->_renderer->render();
	}
}