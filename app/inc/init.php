<?php
use Community\Directory;

date_default_timezone_set('Europe/Paris');

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/localizers.php';
require_once __DIR__ . '/../../vendor/autoload.php';

// Initialize our list of localizers based on the white list in localizers.php
$localizers = new Directory($people);
