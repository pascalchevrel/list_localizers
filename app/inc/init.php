<?php
use Community\Directory;

date_default_timezone_set('Europe/Paris');

define('DATA',       realpath(__DIR__ . '/../../data') . '/');
define('CACHE_PATH', realpath(__DIR__ . '/../../cache/') . '/');

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/localizers.php';

// Initialize our list of localizers based on the white list in localizers.php
$localizers = new Directory($people);
