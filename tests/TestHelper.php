<?php

require_once __DIR__ . '/../vendor/autoload.php';

set_include_path(
    get_include_path() . PATH_SEPARATOR . __DIR__ . '/../vendor/mockery/mockery/library/'
);

$loader = new \Mockery\Loader();
$loader->register();
