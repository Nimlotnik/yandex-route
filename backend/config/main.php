<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf',
        ],
        'assetManager' => [
	        'bundles' => [
	            'yii\bootstrap\BootstrapAsset' => [
	                'css' => ['/admin/css/bootstrap.css'],
	            ],
	            'yii\bootstrap\BootstrapPluginAsset' => [
	            	'js' => ['/admin/js/bootstrap.min.js'],
	            ],
	            'yii\web\JqueryAsset' => [
	            	'js' => ['//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'],
	            ]
	        ]
	    ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_ya-route', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'yandex',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            	'/' => 'site/index',
            	'auth' => 'site/login',
            	'mails' => 'site/mails',
            	'users' => 'user/index',
            	'user/<id:\d+>' => 'user/index',
            	'drivers' => 'site/drivers',
            	'drivers-add' => 'site/drivers-add',
            	'arenda' => 'site/arenda',
            	'arenda-add' => 'site/arenda-add',
            	'uploadimage' => 'site/uploadimage',
            ],
        ],
    ],
    'params' => $params,
];
