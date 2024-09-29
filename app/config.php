<?php

return [
    'app' => [
        'name' => 'CMS X',
        'version' => '0.0.1'
    ],
    'database' => [
        'driver' =>'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'database' => 'cms_x',
        'username' => 'root',
        'password' => 'root',
    ],
    'constants' => [
        'tables' => [
            'users' => 'users',
        ]
    ]
];
