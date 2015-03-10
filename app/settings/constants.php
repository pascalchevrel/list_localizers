<?php

// Usual constants
define('INSTALL',     realpath(__DIR__ . '/../../') . '/');
define('APP',         INSTALL . 'app/');
define('WEB',         INSTALL . 'web/');
define('INC',         APP . 'inc/');
define('VIEWS',       APP . 'views/');
define('MODELS',      APP . 'models/');
define('CONTROLLERS', APP . 'controllers/');
define('SETTINGS',    APP . 'settings/');
define('TEMPLATES',   APP . 'templates/');
define('DEBUG',       true);

// Project specific constants
define('DATA',       realpath(__DIR__ . '/../../data') . '/');
define('APP_DATA',   realpath(__DIR__ . '/../data') . '/');
define('CACHE_PATH', realpath(__DIR__ . '/../../cache/') . '/');

// After this point, all instructions are for the web app only
if (PHP_SAPI == 'cli') {
    return;
}

define('BASE_HTML_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
