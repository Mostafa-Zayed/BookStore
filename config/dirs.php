<?php

// Directory Separator
defined('DS') || define('DS',DIRECTORY_SEPARATOR);

// Root Path
defined('ROOT') || define('ROOT',dirname(__DIR__).DS);

// App Path
defined('APP') || define('APP',ROOT.'app'.DS);

// Controllers Path
defined('CONTROLLERS') || define('CONTROLLERS',APP.'Controllers'.DS);

// Models Path
defined('MODELS') || define('MODELS',APP.'Models'.DS);

// Views Path
defined('VIEWS') || define('VIEWS',APP.'Views'.DS);

// Core Path
defined('CORE') || define('CORE',ROOT.'core'.DS);

// Public Path
defined('PUBLIC_PATH') || define('PUBLIC',ROOT.'public'.DS);

//ASSETSWEB Path
defined('ASSETSWEB') || define('ASSETSWEB',PUBLIC_PATH.'assets'.DS.'web'.DS);

// ASSETSADMIN Path
defined('ASSETSADMIN') || define('ASSETSADMIN',PUBLIC_PATH.'assets'.DS.'admin'.DS);