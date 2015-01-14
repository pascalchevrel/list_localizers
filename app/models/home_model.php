<?php
use Community\Directory;
require_once __DIR__ . '/../inc/scrap_emails.php';

// Check if we have a locale requested
$locale = isset($_GET['locale']) && in_array($_GET['locale'], locales())
    ? $_GET['locale']
    : null;

$localizers_logs = getLocalizersInLogs($exclusion_list, $people);
$aurora = $gaia = $www = [];

foreach ($localizers_logs as $key => $value) {
    foreach (array_keys(repos('fr')) as $repo) {
        if (isset($value[$repo])) {
            $$repo = array_merge($$repo, $value[$repo]);
        }
    }
}

$aurora = undupe($aurora);
$gaia   = undupe($gaia);
$www    = undupe($www);

if ($locale == null) {
    print'<pre>';
    print "Mozilla Core Localizers:\n";
    print "Aurora " . count($aurora) . "\n";
    print "Gaia " . count($gaia) . "\n";
    print "Mozilla.org " . count($www) . "\n";

    $all = undupe(array_merge($aurora, $gaia, $www));
    print "Total: " . count($all) . "\n";
    print "\n";
    print'</pre>';
} else {
    print "Locale: $locale\n";
    print'<pre>';
    print getLocalizersForRepo('gaia', $locale, $localizers_logs);
    print getLocalizersForRepo('aurora', $locale, $localizers_logs);
    print getLocalizersForRepo('www', $locale, $localizers_logs);

    print'</pre>';
}
