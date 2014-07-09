<?php

if (php_sapi_name() != 'cli') {
    die('This command can only be used in CLI mode.');
}

if (isset($argv[1])) {
    if (in_array($argv[1], ['-h', '--help']) && $command_help) {
        die($command_help);
    }
}

if (! isset($argv[1]) && isset($missing_parameter)) {
    die($missing_parameter);
}


date_default_timezone_set('Europe/Paris');

define('DATA', __DIR__ . '/../data');
define('CACHE_PATH', realpath(__DIR__ . '/../cache/') . '/');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/localizers.php';
