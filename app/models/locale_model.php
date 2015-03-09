<?php
/**
 * Locale page: displays committers information for the locale.
 */
use Community\Directory;

include APP_DATA . '/locales.php';

if (! isset($_GET['locale']) || ! in_array($_GET['locale'], $locales)) {
    $title = $content = 'Invalid Locale code';
    include VIEWS . '/locale_view.php';

    return;
}

$locale = $_GET['locale'];
$title  = 'Locale: ' . $locale;

// Load the list of all known localizers
require_once APP_DATA . '/localizers.php';

// Initialize our list of localizers based on the white list in localizers.php
$known_localizers = new Directory($people);

$content = dump($known_localizers);
include VIEWS . '/locale_view.php';
