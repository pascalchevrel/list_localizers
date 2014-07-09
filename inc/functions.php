<?php

function startsWith($haystack, $needle)
{
    return ! strncmp($haystack, $needle, mb_strlen($needle));
}

function undupe($array)
{
    return array_values(array_unique($array));
}

function getEmails($array)
{
    $array = array_unique(array_column($array, 'email'));
    $array = array_filter(
        $array,
        function($e) {
            return $e != 'Unknown email' && ! empty($e);
        }
    );

    return array_values($array);
}

function getLocalizersForRepo($project, $locale, $localizers) {
    if ($project == 'gaia') {
        if (startsWith($locale, 'es-')) {
            $locale = 'es';
        }

        if ($locale == 'sr') {
            $locale = 'sr-Cyrl';
        }

        if ($locale == 'pa-IN') {
            $locale = 'pa';
        }
    }

    // Repo not worked
    if (empty($localizers[$locale][$project])) {
        return '';
    }

    $repos = [
        'gaia'   =>  'Gaia',
        'aurora' => 'Aurora',
        'www'    => 'mozilla.org',
    ];

    $list = "\n{$repos[$project]}:\n";
    foreach($localizers[$locale][$project] as $key => $email) {
        $list .= ($key+1) . ": $email\n";
    }

    return $list;
}

function printCLI($data)
{
    if (is_string($data) || is_null($data)) {
        print $data . "\n";
        return;
    }

    $output = "\n[\n";

    foreach ($data as $k => $v) {
        $output .= "    " . $k . ' : ' . $v . "\n";
    }

    $output .= "]\n";

    print $output;
}

function getRepositoryLog($path, $type = 'hg')
{
    $file = CACHE_PATH . sha1($path) . '.php';

    if (! file_exists($file)) {
        if ($type == 'hg') {
            $repository = new VCS\Mercurial($path);
        } elseif($type =='git') {
            $repository = new VCS\Git($path);
        } else {
            $repository = new VCS\Subversion($path);
        }

        print "Extracting commits for $path\n";
        file_put_contents($file, serialize($repository->getCommits()));
        unset($repository);
    }

    return unserialize(file_get_contents($file));
}

function locales()
{
    $folder = DATA . '/hg/AURORA_L10N/';
    $excluded_files = ['ab-CD', 'en-US', 'ja-JP-mac'];

    $files = array_filter(
        scandir($folder),
        function($item) {
            return ! startsWith($item, '.');
        }
    );

    return array_diff($files, $excluded_files);
}

function inString($haystack, $needle)
{
    return mb_strpos($haystack, $needle, $offset = 0, 'UTF-8') !== false ? true : false;
}
