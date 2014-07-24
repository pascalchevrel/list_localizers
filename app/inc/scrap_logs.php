<?php

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

    $aurora_commits = $gaia_commits = $www_commits = [];

    $target = CACHE_PATH . 'cache_' . $locale . '_serial.php';

    if (! is_file($target)) {
        if (is_dir($aurora_path)) {
            $aurora_commits = getRepositoryLog($aurora_path);
        }

        if (is_dir($gaia_path)) {
            $gaia_commits = getRepositoryLog($gaia_path);
        }

        if (is_dir($www_path)) {
            $www_commits = getRepositoryLog($www_path, 'svn');
        }

        // We create a cache file for a locale containing all commits to all repos
        file_put_contents(
            $target,
            serialize(array_merge($aurora_commits, $gaia_commits, $www_commits))
        );
    }
}
