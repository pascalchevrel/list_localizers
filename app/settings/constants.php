<?php

// Usual constants
define('INSTALL',       realpath(__DIR__ . '/../../') . '/');
define('APP',           INSTALL . 'app/');
define('WEB',           INSTALL . 'web/');
define('INC',           APP . 'inc/');
define('VIEWS',         APP . 'views/');
define('MODELS',        APP . 'models/');
define('CONTROLLERS',   APP . 'controllers/');
define('SETTINGS',      APP . 'settings/');
define('TEMPLATES',     APP . 'templates/');
define('DEBUG',         true);

// project specific constants
define('DATA', realpath(__DIR__ . '/../../data'));
define('CACHE_PATH', realpath(__DIR__ . '/../../cache/') . '/');

// After this point, all instructions are for the web app only
if (php_sapi_name() == 'cli') {
    return;
}

if ($_SERVER['SERVER_NAME'] == 'l10n.mozilla-community.org') {
    define('BASE_HTML_URL', 'https://l10n.mozilla-community.org/~pascalc/google_play_description/');
} elseif ($_SERVER['SERVER_NAME'] == 'demos.mozfr.org') {
    define('BASE_HTML_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/list_localizers/web/');
} else {
    define('BASE_HTML_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/');
}
