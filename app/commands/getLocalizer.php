#!/usr/bin/env php
<?php
$command_help = "Usage: getLocalizer.php [email]\n"
              . "Example: getLocalizer.php pascal@chevrel.org\n";
$missing_parameter = "Please give an email address as parameter.\n";

require_once __DIR__ . '/../inc/cli_init.php';
require_once __DIR__ . '/../inc/scrap_logs.php';

$email = trim($argv[1]);

// reference time in the past
$date = new DateTime('2000-01-01');

print "Setting up $email...\n";
if (! $localizers->setPerson($email)) {
    die("This email is not one we have data for.\n");
}

$commits = unserialize(file_get_contents(
    CACHE_PATH . 'cache_' . $localizers->getLocale() . '_serial.php'
));

// We look for the last commit by the person
foreach ($commits as $key => $values) {
    if ($email == $values['email']) {
        if ($values['date'] > $date) {
            $date = $values['date'];
            $changeset = $key;
        }
    }
}

print "This person's name: ";
printCLI($localizers->getName());

print "This person's locale: ";
printCLI($localizers->getLocale());

print "This person's email: ";
printCLI($localizers->getEmail());

print "All of this person's emails: ";
printCLI($localizers->getAllEmails());

print "All of this person's names and aliases: ";
printCLI($localizers->getAllNames());

// We only display information if we were able to find a commit for the email
if (isset($changeset)) {
    print "The last commit by this person was on: ";

    print $date->format('Y-m-d') . "\n";

    print "Commit message: ";
    print $commits[$changeset]['summary'] . "\n";

    print "Commit: ";
    print $commits[$changeset]['commit'] . "\n";

    print "He committed on: ";
    print $commits[$changeset]['vcs'] . "\n";
}
