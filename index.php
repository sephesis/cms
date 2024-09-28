<?php

$isInstalled = true;

require __DIR__. '/vendor/autoload.php';

//var_dump(__DIR__. '/../vendor/autoload.php'); die;

if ($isInstalled && file_exists(__DIR__. '/app.php')) {
    require __DIR__ . '/app.php';
}elseif (file_exists(__DIR__. '/setup.php')) {
    require __DIR__ . '/setup.php';
}else{
    die('oops');
}