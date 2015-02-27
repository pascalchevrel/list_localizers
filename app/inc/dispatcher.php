<?php
switch ($url['path']) {
    case '/':
        $model = 'home';
        break;
    case 'locale':
        $model = 'locale';
        break;
    default:
        $model = 'home';
        break;
}

print getBufferedInclude(
    MODELS . $model . '_model.php',
    TEMPLATES . 'html.php'
);
