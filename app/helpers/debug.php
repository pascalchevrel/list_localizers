<?php
/**
 * Utility function to get symfony dump() function output to the CLI
 * http://symfony.com/doc/current/components/var_dumper/
 */
function cli_dump() {
    $cloner = new Symfony\Component\VarDumper\Cloner\VarCloner();
    $dumper = new Symfony\Component\VarDumper\Dumper\CliDumper();
    foreach (func_get_args() as $arg) {
        $dumper->dump($cloner->cloneVar($arg));
    }
}

function log_perf()
{
    $memory = 'Memory peak: '
        . memory_get_peak_usage(true)
        . ' ('
        . round((memory_get_peak_usage(true)/(1024*1024)),2)
        . 'MB)';
    $render_time = 'Elapsed time (s): '
        . round((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']), 4);
    cli_dump($memory);
    cli_dump($render_time);
}
