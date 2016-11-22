<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'timeZone' => 'Europe/Moscow',
    'modules' => [
        'users' => [
            'class' => 'lib_BT\users\Module',
            'robotEmail' => 'no-reply@domain.com',
            'robotName' => 'Robot'
        ],
        'blogs' => [
            'class' => 'lib_BT\blogs\Module'
        ],
        'comments' => [
            'class' => 'lib_BT\comments\Module'
        ]
    ],
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'lib_BT\users\models\User',
            'loginUrl' => ['/users/guest/login']
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@root/cache',
            'keyPrefix' => 'yii2start'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'suffix' => '/'
        ],
        'assetManager' => [
            'linkAssets' => true
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => [
                'user'
            ],
            'itemFile' => '@lib_BT/rbac/data/items.php',
            'assignmentFile' => '@lib_BT/rbac/data/assignments.php',
            'ruleFile' => '@lib_BT/rbac/data/rules.php',
        ],
        'formatter' => [
            'dateFormat' => 'dd.MM.y',
            'datetimeFormat' => 'HH:mm:ss dd.MM.y'
        ],
        'db' => require(__DIR__ . '/db.php')
    ],
    'params' => require(__DIR__ . '/params.php')
];
