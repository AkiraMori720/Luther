<?php

use DELIVERY\App\DeliveryApp;
use OZONE\OZ\Core\SettingsManager;
use OZONE\OZ\FS\TemplatesUtils;
use OZONE\OZ\Loader\ClassLoader;
use OZONE\OZ\OZone;

//= Informs OZone that we are in Web Context/Mode
\define('OZ_OZONE_IS_WEB_CONTEXT', true);

//= Api key to use
\define('OZ_OZONE_DEFAULT_API_KEY', '636453B6-C0B601E4-98B1029D-074F1080');

//=	Don't forget to use DS instead of \ or / and
//= always add the last DS to your directories path
if (!\defined('DS')) {
	\define('DS', \DIRECTORY_SEPARATOR);
}

//= Logs directory
if (!\defined('OZ_LOG_DIR')) {
	\define('OZ_LOG_DIR', __DIR__ . DS);
}

//= Require api index file
require_once '../api/index.php';

//= Adds additional settings source
SettingsManager::addSource(__DIR__ . DS . 'oz_private' . DS . 'oz_settings');

//= Adds additional templates source
TemplatesUtils::addSource(__DIR__ . DS . 'oz_private' . DS . 'oz_templates');

//= Adds new directory to project namespace
ClassLoader::addNamespace('\DELIVERY\App', __DIR__ . DS . 'oz_private');

//= Run the app
OZone::run(new DeliveryApp());
