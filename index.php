<?php

use \Cms;

/** + DEBUG **/
error_reporting(E_ALL);
ini_set('display_errors', true);
date_default_timezone_set('Europe/Amsterdam');
setlocale(LC_ALL, 'nl_NL');
/** - DEBUG **/

define('BASE_PATH', dirname(__FILE__));

require_once BASE_PATH . '/library/Cms/Loader.php';

require_once BASE_PATH . '/library/Cms/Application.php';

// create the applications
$application = new Cms\Application();

// bootstrap (load everything)
$application->bootstrap();

// run
$application->run();