<?php
use Community\Directory;

require_once __DIR__ . '/../app/inc/init.php';
require_once __DIR__ . '/../app/inc/scrap_emails.php';

Print "<h1>List of localizers</h1>";
print '<p>Number of registered localizers committing to our VCS: ' . count($people) . '</p>';

$localizers_logs = getLocalizersInLogs($exclusion_list);
$aurora = $gaia = $www = [];

foreach ($localizers_logs as $key => $value) {
    foreach(['aurora', 'gaia', 'www'] as $repo) {
        if (isset($value[$repo])) {
           $$repo = array_merge($$repo, $value[$repo]);
        }
    }
}

$aurora = undupe($aurora);
$gaia   = undupe($gaia);
$www    = undupe($www);


print "<h3>Mozilla Core Localizers:</h3>";
print "<ul>";
print "<li>Aurora " . count($aurora) . '</li>';
print "<li>Gaia " . count($gaia) . '</li>';
print "<li>Mozilla.org " . count($www) . '</li>';
print "</ul>";

$all = undupe(array_merge($aurora, $gaia, $www));
print "<p>Total: " . count($all) . '</p>';

$primary = 0;
$secondary = 0;
$other = [];

foreach ($all as $email) {
    $match = false;
    if (in_array($email, array_keys($people))) {
        $primary++;
        $match = true;
    }

    foreach($people as $values) {
        if (in_array($email, $values['other_emails'])) {
            $secondary++;
            $match = true;
            continue;
        }
    }
    if (!$match) {
        $other[] = $email;
    }
}

print 'Primary: ' . $primary . '<br>';
print 'Secondary: ' . $secondary . '<br>';

print 'Other: ' . count($other) . '<br>';
$other = undupe($other);
print 'Other unduped: ' . count($other) . '<br>';

print '<pre>';print_r($other);

foreach(locales() as $locale) {

    $target = CACHE_PATH . 'cache_' . $locale . '_serial.php';
    $logs = unserialize(file_get_contents($target));

    foreach($other as $email) {
        foreach($logs as $key => $values) {
            if ($email == $values['email']) {
                $logs[$key]['locale'] = $locale;
                print_r($logs[$key]);
                break;
            }
        }
    }
}


die;
print "Locale: $locale\n";
print getLocalizersForRepo('gaia', $locale, $localizers_logs);
print getLocalizersForRepo('aurora', $locale, $localizers_logs);
print getLocalizersForRepo('www', $locale, $localizers_logs);
