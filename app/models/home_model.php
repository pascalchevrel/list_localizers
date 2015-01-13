<?php
use Community\Directory;

// Check if we have a locale requested
$locale = isset($_GET['locale']) && in_array($_GET['locale'], locales())
    ? $_GET['locale']
    : 'fr';

print $locale;
