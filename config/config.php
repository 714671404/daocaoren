<?php

//define('VIEW_PATH', APP_PATH . '/resources/views');

return [
    'default_controller' => 'Index',
    'default_action' => 'index',
    'debug' => true,
    'db' => [
        'connection' => 'mysql',
        'dbname' => 'daocaoren',
        'host' => '127.0.0.1',
        'user' => 'root',
        'pass' => 'yuefei12',
        'charset' => 'utf8',
        'port' => 3306,
    ]
];