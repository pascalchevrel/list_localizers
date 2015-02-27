<?php
/**
 * Locale page: displays committers information for the locale.
 */

include APP_DATA . '/locales.php';

if (! isset($_GET['locale']) || ! in_array($_GET['locale'], $locales)) {
    $title = $content = 'Invalid Locale code';
    include VIEWS . '/locale_view.php';
    return;
}

$locale = $_GET['locale'];
$title = 'Locale: ' . $locale;
$content = "toto";

include VIEWS . '/locale_view.php';
