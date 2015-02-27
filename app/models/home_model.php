<?php
/**
 * Home page displays all the locale codes, we can click on a locale code to
 * have more details about it.
 */
include APP_DATA . '/locales.php';

$title = 'Mozilla l10n committers - Overview';
$links = '';

foreach ($locales as $locale) {
    $links .= "<li><a href=\"./locale/?locale={$locale}\">{$locale}</a></li>";
}

include VIEWS . '/home_view.php';
