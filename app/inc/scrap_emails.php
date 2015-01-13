<?php


function getLocalizersInLogs($exclusion_list, $people)
{
    $cached_data = CACHE_PATH . 'emails.php' ;

    if (! file_exists($cached_data)) {
        $localizers = [];

        foreach (locales() as $locale) {

            $get_localizers = function ($commits) use ($exclusion_list, $locale, $people) {
                if ($locale == 'fr') {
                    $exclusion_list = array_diff(
                        $exclusion_list,
                        ['pascal.chevrel@free.fr', 'theo.chevalier11@gmail.com']
                    );
                }
                return array_values(array_diff(getEmails($commits, $people), $exclusion_list));
            };

            foreach (array_keys(repos($locale)) as $target) {
                $lang = ($target == 'gaia') ? getGaiaLocale($locale) : $locale;

                if (is_dir(repos($locale)[$target]['path'])) {

                    $commits = getRepositoryLog(repos($locale)[$target]['path']);

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
