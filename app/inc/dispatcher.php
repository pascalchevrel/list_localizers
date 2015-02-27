<?php
switch ($url['path']) {
    case '/':
    default:
        $model = 'home';
        break;
}

$content = getBufferedInclude(MODELS . $model . '_model.php');

// display the page
require_once TEMPLATES . 'html.php';
