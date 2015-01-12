<!doctype html>
<html>
<head>
<title>Summary</title>
<style>
table {
    border-collapse:collapse;
}
td,th {
    border: 1px solid lightgray;
    padding: 5px 10px;
}
</style>

</head>
<body>
<?php
use Community\Directory;

require_once __DIR__ . '/../app/inc/init.php';
require_once __DIR__ . '/../app/inc/scrap_emails.php';

$localizers_logs = getLocalizersInLogs($exclusion_list, $people);
$aurora = $gaia = $www = [];

foreach ($localizers_logs as $key => $value) {
    foreach (['aurora', 'gaia', 'www'] as $repo) {
        if (isset($value[$repo])) {
            $$repo = array_merge($$repo, $value[$repo]);
        }
    }
}

$aurora = undupe($aurora);
$gaia   = undupe($gaia);
$www    = undupe($www);

$locale = 'fr';

print "Locale: $locale\n";
print htmlList(getLocalizersForRepo('gaia', $locale, $localizers_logs, 'html'));
print htmlList(getLocalizersForRepo('aurora', $locale, $localizers_logs, 'html'));
print htmlList(getLocalizersForRepo('www', $locale, $localizers_logs, 'html'));


?>
</body>
</html>
