<?php

function getLocalizersInLogs($exclusion_list, $people)
{
    $cached_data = CACHE_PATH . 'emails.php';

    if (! file_exists($cached_data)) {
        $localizers = [];

        foreach (locales() as $locale) {
            $get_locale = function ($locale) use ($target) {
                switch ($locale) {
                    case startsWith($locale, 'es-'):
                        $locale = 'es';
                        break;
                    case startsWith($locale, 'sr'):
                        $locale = 'sr-Cyrl';
                        break;
                    default:
                        break;
                }

                return $locale;
            };

            $get_localizers = function ($commits) use ($exclusion_list, $locale, $people) {
                if ($locale == 'fr') {
                    $exclusion_list = array_diff(
                        $exclusion_list,
                        ['pascal.chevrel@free.fr', 'theo.chevalier11@gmail.com']
                    );
                }

                return array_values(array_diff(getEmails($commits, $people), $exclusion_list));
            };

            $localizers[$locale]['gaia'] = [];
            $localizers[$locale]['aurora'] = [];
            $localizers[$locale]['www'] = [];

            foreach (['aurora', 'gaia', 'www'] as $target) {
                $repos = [
                    'aurora' => [
                        'path' => DATA . '/hg/AURORA_L10N/' . $get_locale($locale) . '/',
                        'vcs'  => 'hg',
                    ],
                    'gaia' => [
                        'path' => DATA . '/hg/GAIA/' . $get_locale($locale) . '/',
                        'vcs'  => 'hg',
                    ],
                    'www' => [
                        'path' => DATA . '/svn/mozilla_org/' . $get_locale($locale) . '/',
                        'vcs'  => 'svn',
                    ],
                ];
                if (is_dir($repos[$target]['path'])) {
                    $commits[$target] = getRepositoryLog($repos[$target]['path'], $repos[$target]['vcs']);

                    if (isset($localizers[$locale][$target])) {
                        $localizers[$locale][$target] = array_merge(
                            $localizers[$locale][$target],
                            $get_localizers($commits[$target])
                        );
                    } else {
                        $localizers[$locale][$target] = $get_localizers($commits[$target]);
                    }
                }
                $localizers[$gaia_locale][$target] = array_unique($localizers[$gaia_locale][$target]);
            }
        }

        file_put_contents($cached_data, serialize($localizers));
    }

    return unserialize(file_get_contents($cached_data));
}
