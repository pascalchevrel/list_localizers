<?php

foreach (locales() as $locale) {

    $target = CACHE_PATH . 'cache_' . $locale . '_serial.php';

    // Caching data
    if (! is_file($target)) {
        $get_commits = function($project) use($locale) {
            return is_dir(repos($locale)[$project]['path'])
                ? getRepositoryLog(repos($locale)[$project]['path'], repos($locale)[$project]['vcs'])
                : [];
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

