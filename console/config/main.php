<?php

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'console\controllers',
    'bootstrap' => [
        'log'
    ],
    'modules' => [
        'rbac' => [
            'class' => 'lib_BT\rbac\Module',
            'controllerNamespace' => 'lib_BT\rbac\commands'
        ],
        'users' => [
            'class' => 'lib_BT\users\Module',
            'controllerNamespace' => 'lib_BT\users\commands'
        ],
        'blogs' => [
            'class' => 'lib_BT\blogs\Module',
            'controllerNamespace' => 'lib_BT\blogs\commands'
        ],
        'comments' => [
            'class' => 'lib_BT\comments\Module',
            'controllerNamespace' => 'lib_BT\comments\commands'
        ]
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ]
    ],
    'params' => require(__DIR__ . '/params.php')
];
