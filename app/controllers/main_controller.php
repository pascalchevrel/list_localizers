<?php
namespace Play;

if (! isset($model)) {
    $model = '404';
}

// By default, we want to output our data in a template
$raw_output = false;

switch($model) {
    case 'home':
        $title = 'Mozilla l10n committers - Overview';
        $model = 'home';
        $view  = 'home';
        break;
    case 'api':
        $raw_output = true;
        $view = 'json';
        break;
    default:
        $title = 'fooabr';
        $locale = false;
        break;
}

if ($model) {
    include APP .'models/' . $model . '_model.php';
}

ob_start();
include APP . 'views/' . $view . '_view.php';
$content = ob_get_contents();
ob_end_clean();

// Output final page, in a template if necessary
if ($raw_output) {
    die($content);
} else {
    include APP .'templates/html.php';
}
