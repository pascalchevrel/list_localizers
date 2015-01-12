#!/usr/bin/env php
<?php
use Community\Directory;

$command_help = "List all the localizers we get from logs\n";

require_once __DIR__ . '/../inc/cli_init.php';
require_once __DIR__ . '/../inc/scrap_logs.php';

$ignored_authors = ['ffxbld', 'calbld', 'seabld', 'tbirdbld'];
$localizers_in_logs = [];
$template = [];

foreach (locales() as $locale) {
    $commits = unserialize(
        file_get_contents(
            CACHE_PATH . '/cache_' . $locale . '_serial.php'
        )
    );

    foreach ($commits as $values) {
        $email  = $values['email'];
        $author = $values['author'];

        if (in_array($email, $exclusion_list)) {
            continue;
        }
        // We don't have an email, let's guess what it is
        if ($email == 'Unknown') {
            if (in_array($author, $ignored_authors)) {
                continue;
            }

            if (inString($author, 'https://wiki.mozilla.org/L10n:Teams:')
                || inString($author, 'Pootle')) {
                $author = "{$locale} - Locamotion";
            }

            $match = false;
            foreach ($people as $key => $values) {
                if (strtolower($author) == strtolower($values['name'])) {
                    $email = $values['name'];
                    $match = true;
                    break;
                }
            }

            if (! $match) {
                $error[] = trim($author);
            }
        }

        // email not added yet
        if (! isset($localizers_in_logs[$email])) {

            $localizers->setPerson($email);

            if (! is_null($localizers->getName())) {
                $localizers_in_logs[$email] = [$localizers->getName()];
            } else {
                $localizers_in_logs[$email] = [$author];
            }

            continue;
        }

        if (! in_array($author, $localizers_in_logs[$email])) {
            array_push($localizers_in_logs[$email], $author);
        }

        $template[$email] = [
            'name'         => $author,
            'locale'       => [$locale],
            'other_emails' => [],
            'other_names'  => [],
        ];
    }
}

$template2 = '';

foreach ($template as $email => $details) {
    $locale = implode(', ', $details['locale']);
    $template2 .= <<<TEMPLATE
        '$email' => [
            'name'         => '{$details['name']}',
            'locale'       => ['$locale'],
            'other_emails' => [],
            'other_names'  => []
        ],

TEMPLATE;
}
print $template2;
