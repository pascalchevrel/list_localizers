<?php

$cached_data = CACHE_PATH . 'emails.php' ;

if (! file_exists($cached_data)) {
    $localizers = [];

    foreach (locales() as $locale) {

        if (startsWith($locale, 'es-')) {
            $gaia_locale = 'es';
        } elseif (startsWith($locale, 'sr')) {
            $gaia_locale = 'sr-Cyrl';
        } else {
            $gaia_locale = $locale;
        }

        $aurora_path = DATA . '/hg/AURORA_L10N/' . $locale . '/';
        $gaia_path   = DATA . '/hg/GAIA/' . $gaia_locale . '/';
        $www_path    = DATA . '/svn/mozilla_org/' . $locale . '/';

        $get_localizers = function($commits) use($exclusion_list, $locale) {
            if ($locale == 'fr') {
                $exclusion_list = array_diff(
                    $exclusion_list,
                    ['pascal.chevrel@free.fr', 'theo.chevalier11@gmail.com']
                );
            }
            return array_values(array_diff(getEmails($commits), $exclusion_list));
        };

        $localizers[$locale]['gaia'] = [];
        $localizers[$locale]['aurora']= [];
        $localizers[$locale]['www'] = [];

        // Aurora
        if (is_dir($aurora_path)) {

            $aurora_commits = getRepositoryLog($aurora_path);

            if (isset($localizers[$locale]['aurora'])) {
                $localizers[$locale]['aurora'] = array_merge(
                                                $localizers[$locale]['aurora'],
                                                $get_localizers($aurora_commits));
            } else {
                $localizers[$locale]['aurora'] = $get_localizers($aurora_commits);
            }
        }

        // Gaia
        if (is_dir($gaia_path)) {

            $gaia_commits = getRepositoryLog($gaia_path);

            if (isset($localizers[$gaia_locale]['gaia'])) {
                $localizers[$gaia_locale]['gaia'] = array_merge(
                                                $localizers[$gaia_locale]['gaia'],
                                                $get_localizers($gaia_commits));
            } else {
                $localizers[$gaia_locale]['gaia'] = $get_localizers($gaia_commits);
            }

            $localizers[$gaia_locale]['gaia'] = array_unique($localizers[$gaia_locale]['gaia']);
        }

        // www
        if (is_dir($www_path)) {

            $www_commits = getRepositoryLog($www_path, 'svn');

            if (isset($localizers[$locale]['www'])) {
                $localizers[$locale]['www'] = array_merge(
                                                $localizers[$locale]['www'],
                                                $get_localizers($www_commits));
            } else {
                $localizers[$locale]['www'] = $get_localizers($www_commits);
            }
        }
    }

    file_put_contents($cached_data, serialize($localizers));
}

return $localizers = unserialize(file_get_contents($cached_data));
