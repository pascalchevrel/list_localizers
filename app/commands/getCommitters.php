#!/usr/bin/env php
<?php

$command_help = "Usage: committers.php [locale_code]\nExample: committers.php zh-TW\n";

require_once __DIR__ . '/../inc/cli_init.php';
require_once __DIR__ . '/../inc/scrap_emails.php';

$aurora = $gaia = $www = [];

foreach ($localizers as $key => $value) {
    foreach(['aurora', 'gaia', 'www'] as $repo) {
        if (isset($value[$repo])) {
           $$repo = array_merge($$repo, $value[$repo]);
        }
    }
}

$aurora = undupe($aurora);
$gaia   = undupe($gaia);
$www    = undupe($www);

if (! isset($argv[1])) {
    print "Mozilla Core Localizers:\n";
    print "Aurora " . count($aurora) . "\n";
    print "Gaia " . count($gaia) . "\n";
    print "Mozilla.org " . count($www) . "\n";

    $all = undupe(array_merge($aurora, $gaia, $www));
    print "Total: " . count($all) . "\n";
    print "\n";
    die;
}

$locale = trim($argv[1]);

print "Locale: $locale\n";
print getLocalizersForRepo('gaia', $locale, $localizers);
print getLocalizersForRepo('aurora', $locale, $localizers);
print getLocalizersForRepo('www', $locale, $localizers);

