<?php

foreach (locales() as $locale) {

    switch($locale) {
        case startsWith($locale, 'es-'):
            $gaia_locale = 'es';
            break;
        case startsWith($locale, 'sr'):
            $gaia_locale = 'sr-Cyrl';
            break;
        default:
            $gaia_locale = $locale;
    }

    $repos = [
        'aurora' => [DATA . '/hg/AURORA_L10N/' . $locale . '/', 'hg'],
        'gaia'   => [DATA . '/hg/GAIA/' . $gaia_locale . '/', 'hg'],
        'www'    => [DATA . '/svn/mozilla_org/' . $locale . '/', 'svn'],
    ];

    $target = CACHE_PATH . 'cache_' . $locale . '_serial.php';

    // Caching data
    if (! is_file($target)) {
        $get_commits = function($project) use($repos){
            return is_dir($repos[$project][0]) ? getRepositoryLog($repos[$project][0], $repos[$project][1]) : [];
        };

        // We create a cache file for a locale containing all commits to all repos
        file_put_contents(
            $target,
            serialize(
                array_merge(
                    $get_commits('aurora'),
                    $get_commits('gaia'),
                    $get_commits('www')
                )
            )
        );
    }
}

