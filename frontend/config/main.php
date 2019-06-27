<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //'baseUrl'=>'/maktab.uz',
    'controllerNamespace' => 'frontend\controllers',
    'language' =>'uz-UZ',
    'components' => [
        'request' => [
            
            'csrfParam' => '_csrf-frontend',
           'baseUrl'=>'',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //  'urlManager' => [
        //     //'baseUrl' => '/maktab.uz',
        //     'enablePrettyUrl' => true,
        //     'showScriptName' => false,
        //     'enableStrictParsing' => true,
        //     'rules' => [
        //         '/' => 'site/index',
        //         '/site' => 'site/index',
        //         '<controller>/<action>' => '<controller>/<action>',
        //         '<controller>/<action>/<id:\w+>' => '<controller>/<action>/<id:\w+>',            ]
        // ],
        
        'urlManager' => [
           'baseUrl'=>'',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
           '' => 'site/index',
    '<action:\w+>' => 'site/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>', ],
        ],
        
    ],
    'params' => $params,
];
