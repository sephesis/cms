<?php

$isInstalled = true;

require __DIR__. '/vendor/autoload.php';
require __DIR__. '/app/functions.php';


if ($isInstalled && file_exists(__DIR__. '/app.php')) {
    require __DIR__ . '/app.php';
}elseif (file_exists(__DIR__. '/setup.php')) {
    require __DIR__ . '/setup.php';
}else{
    die('oops');
}