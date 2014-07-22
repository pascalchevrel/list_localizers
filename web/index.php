<?php
use Community\Directory;

require_once __DIR__ . '/../app/inc/init.php';
require_once __DIR__ . '/../app/inc/scrap_emails.php';

Print "<h1>List of localizers</h1>";
print '<p>Number of identified localizers that committed to our VCS: ' . count($people) . '</p>';

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
print "<p>Total after merging: " . count($all) . '</p>';

print "<h3>Active localizers in 2014</h3>";

// reference time in the past

$y2011 = new DateTime('2011-01-01');
$y2012 = new DateTime('2012-01-01');
$y2013 = new DateTime('2013-01-01');
$y2014 = new DateTime('2014-01-01');
$community_2011 = [];
$community_2012 = [];
$community_2013 = [];
$community_2014 = [];
$counter = 0;

foreach($all as $email) {
    if (!$localizers->setPerson($email)) {
        continue;
    }

    $commits = unserialize(file_get_contents(
        CACHE_PATH . 'cache_' . $localizers->getLocale() . '_serial.php'
    ));

    // We look for the last commit by the person

    foreach ($commits as $key => $values) {

        if ($email == $values['email']) {

            if ($values['date'] > $y2014) {
                if(! isset($community_2014[$email])) {
                    $community_2014[$email] = $values;

                    $community_2014[$email]['vcs'] = [$values['vcs']];
                } else {
                    $community_2014[$email]['vcs'] = undupe(array_merge($community_2014[$email]['vcs'], [$values['vcs']]));
                }
            }

            if ($values['date'] < $y2014 && $values['date'] > $y2013) {
                if(! isset($community_2013[$email])) {
                    $community_2013[$email] = $values;
                    $community_2013[$email]['vcs'] = [$values['vcs']];
                } else {
                    $community_2013[$email]['vcs'] = undupe(array_merge($community_2013[$email]['vcs'], [$values['vcs']]));
                }
            }

            if ($values['date'] < $y2013 && $values['date'] > $y2012) {
                if(! isset($community_2012[$email])) {
                    $community_2012[$email] = $values;
                    $community_2012[$email]['vcs'] = [$values['vcs']];
                } else {
                    $community_2012[$email]['vcs'] = undupe(array_merge($community_2012[$email]['vcs'], [$values['vcs']]));
                }
            }
        }
    }

}
                    // var_dump($community_2014[$email]['vcs']); die;

$y = function($year, $arr) {
    print "$year: " . count($arr) . '<br>';
};

$y('2012', $community_2012);
$y('2013', $community_2013);
$y('2014', $community_2014);

$get_vcs_stats = function($year, $committers) {
    $hg = $svn = $both = 0;

    print "<h3>$year</h3>";
    foreach($committers as $values) {
        if (in_array('svn', $values['vcs']) && ! in_array('hg', $values['vcs'] )) {
            $svn++;
        }

        if (in_array('hg', $values['vcs']) && ! in_array('svn', $values['vcs'] )) {
            $hg++;
        }

        if (in_array('hg', $values['vcs']) && in_array('svn', $values['vcs'] )) {
            $both++;
        }
    }
    print 'hg only: ' . $hg . '<br>';
    print 'svn only: ' . $svn . '<br>';
    print 'hg & svn: ' . $both . '<br>';
    print 'total hg: ' . ($hg + $both) . '<br>';
    print 'total svn: ' . ($svn + $both) . '<br>';

};

$get_vcs_stats('2012', $community_2012);
$get_vcs_stats('2013', $community_2013);
$get_vcs_stats('2014', $community_2014);

$email_2013 = array_keys($community_2013);
$email_2014 = array_keys($community_2014);
echo "<pre>";
print_r(array_diff($email_2013, $email_2014));
