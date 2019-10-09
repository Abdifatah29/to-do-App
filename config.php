<?php

return [
    // Returns the path to the project's root directory
    'base_path' => dirname(dirname(__FILE__) . '/to-do-App/') . DIRECTORY_SEPARATOR,
    // Returns the localhost app url
    'app_url' => 'http://localhost/codeSpace/to-do-App/',
    'db' => [
        'host' => '167.71.74.228',
        'username' => 'abdi',
        'password' => 'adaptive55hells55Yucca',
        'database' => '2019BWebIntensive_abdi',
        'port' => 3306
    ],
    'routes' => [
        '/' => 'index.php'
    ]
];