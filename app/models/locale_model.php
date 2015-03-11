<?php
/**
 * Locale page: displays committers information for the locale.
 */

use Community\Directory;

include APP_DATA . 'locales.php';

if (! isset($_GET['locale']) || ! in_array($_GET['locale'], $locales)) {
    $title = $content = 'Invalid Locale code';
    include VIEWS . '/locale_view.php';

    return;
}

$locale = $_GET['locale'];
$title  = 'Locale: ' . $locale;

// Initialize our list of localizers based on a white list in localizers.php
$localizers = new Directory(include APP_DATA . '/localizers.php');

$content = dump($localizers);

print $locale;

include VIEWS . '/locale_view.php';
