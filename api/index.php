<?php

use DELIVERY\App\DeliveryApp;
use OZONE\OZ\Loader\ClassLoader;
use OZONE\OZ\OZone;

//=	Don't forget to use DS instead of \ or / and
//= always add the last DS to your directories path

if (!\defined('DS')) {
	\define('DS', \DIRECTORY_SEPARATOR);
}

//= Project directory
if (!\defined('OZ_PROJECT_DIR')) {
	\define('OZ_PROJECT_DIR', \dirname(__DIR__) . DS);
}

//= You can define the path to your ozone app directory here
if (!\defined('OZ_APP_DIR')) {
	\define('OZ_APP_DIR', __DIR__ . DS . 'app' . DS);
}

//= Logs directory
if (!\defined('OZ_LOG_DIR')) {
	\define('OZ_LOG_DIR', __DIR__ . DS);
}

//= Load composer autoload
require_once OZ_PROJECT_DIR . 'vendor' . DS . 'autoload.php';

//= Adds project namespace root directory
ClassLoader::addNamespace('\DELIVERY\App', OZ_APP_DIR);

//$crypt = new \OZONE\OZ\Crypt\DoCrypt();
//oz_logger($crypt->passHash(""));

//= Run the app if we are not in web context
if (!\defined('OZ_OZONE_IS_WEB_CONTEXT')) {
	OZone::run(new DeliveryApp());
}
