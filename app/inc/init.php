<?php

date_default_timezone_set('Europe/Paris');

// We always work with UTF8 encoding (needed for PHP < 5.6)
mb_internal_encoding('UTF-8');

// Load all constants for the application
require_once __DIR__ . '/../settings/constants.php';

// Autoloading of classes (both /vendor and /classes)
require_once INSTALL . 'vendor/autoload.php';

// Dispatch urls, use it only in web context
require_once INC . 'dispatcher.php';
