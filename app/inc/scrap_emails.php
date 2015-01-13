<?php
function getGaiaLocale($locale)
{
    if (startsWith($locale, 'es-')) {
        return 'es';
    }

    if (startsWith($locale, 'sr')) {
        return 'sr-Cyrl';
    }

    return $locale;
}

function getLocalizersInLogs($exclusion_list, $people)
{
    $cached_data = CACHE_PATH . 'emails.php' ;

    if (! file_exists($cached_data)) {
        $localizers = [];

        foreach (locales() as $locale) {

            $repos = [
                'aurora' => [
                    'path' => DATA . '/hg/AURORA_L10N/' . $locale . '/',
                    'vcs'  => 'hg',
                ],
                'gaia' => [
                    'path' => DATA . '/hg/GAIA/' . getGaiaLocale($locale) . '/',
                    'vcs'  => 'hg',
                ],
                'www' => [
                    'path' => DATA . '/svn/mozilla_org/' . $locale . '/',
                    'vcs'  => 'svn',
                ],
            ];

            $get_localizers = function ($commits) use ($exclusion_list, $locale, $people) {
                if ($locale == 'fr') {
                    $exclusion_list = array_diff(
                        $exclusion_list,
                        ['pascal.chevrel@free.fr', 'theo.chevalier11@gmail.com']
                    );
                }
                return array_values(array_diff(getEmails($commits, $people), $exclusion_list));
            };

            foreach (array_keys($repos) as $target) {
                $lang = ($target == 'gaia') ? getGaiaLocale($locale) : $locale;

                if (is_dir($repos[$target]['path'])) {

                    $commits = getRepositoryLog($repos[$target]['path']);

                    if (isset($localizers[$lang][$target])) {
                        $localizers[$lang][$target] = array_merge(
                            $localizers[$lang][$target],
                            $get_localizers($commits)
                        );
                    } else {
                        $localizers[$lang][$target] = $get_localizers($commits);
                    }
                }
            }
        }

        // Remove duplicate for Spanish in Gaia because we map es-AR/CL/ES/MX to es
        $localizers['es']['gaia'] = array_unique($localizers['es']['gaia']);

        file_put_contents($cached_data, serialize($localizers));
    }

    return unserialize(file_get_contents($cached_data));
}
