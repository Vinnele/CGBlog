<?php

Yii::setAlias('backend', dirname(__DIR__));

return [
    'id' => 'app-backend',
    'name' => 'Yii2-Блог',
    'basePath' => dirname(__DIR__),
	'language' => 'ru-RU', 
    'defaultRoute' => 'admin/default/index',
    'modules' => [
        'admin' => [
            'class' => 'lib_BT\admin\Module'
        ],
        'users' => [
            'controllerNamespace' => 'lib_BT\users\controllers\backend'
        ],
        'blogs' => [
            'isBackend' => true
        ],
        'comments' => [
            'isBackend' => true
        ],
        'rbac' => [
            'class' => 'lib_BT\rbac\Module',
            'isBackend' => true
        ]
    ],
	'components' => [
    'request' => [
        'csrfParam' => '_backendCSRF',
        'csrfCookie' => [
            'httpOnly' => true,
            'path' => '/admin',
        ],
    ],
    'user' => [
        'identityCookie' => [
            'name' => '_backendIdentity',
            'path' => '/admin',
            'httpOnly' => true,
        ],
    ],
    'session' => [
        'name' => 'BACKENDSESSID',
        'cookieParams' => [
            'path' => '/admin',
        ],
    ],
],
    'components' => [
        'request' => [
            'cookieValidationKey' => '7fdsf%dbYd&djsb#sn0mlsfo(kj^kf98dfh',
            'baseUrl' => '/backend'
        ],
        'urlManager' => [
            'rules' => [
                '' => 'admin/default/index',
                '<_m>/<_c>/<_a>' => '<_m>/<_c>/<_a>'
            ]
        ],
        'view' => [
            'theme' => 'lib_BT\themes\admin\Theme'
        ],
        'errorHandler' => [
            'errorAction' => 'admin/default/error'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
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
