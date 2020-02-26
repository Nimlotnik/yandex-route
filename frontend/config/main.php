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
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf',
        ],
        'assetManager' => [
	        'bundles' => [
	            'yii\bootstrap\BootstrapAsset' => [
	                'css' => ['/css/bootstrap.css'],
	            ],
	            'yii\bootstrap\BootstrapPluginAsset' => [
	            	'js' => ['/js/bootstrap.min.js'],
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            	'/' 			=> 'site/index',
            	'contact' 		=> 'site/contact',
            	'connect' 		=> 'site/connect',
            	'test' 			=> 'site/test',
            	'connect_go' 	=> 'site/connect_go',
            	'order' 		=> 'site/order',
            	'faq' 			=> 'site/faq',
            	'posts' 		=> 'site/posts',
            	'post/<id:\d+>' => 'site/post',
            	'news' 			=> 'site/news',
            	'new/<id:\d+>'  => 'site/new',
            	'spares'        => 'site/spares',
            	'arenda'        => 'site/arenda',
            	'get_model'     => 'site/get_model',
            	'auto'      	=> 'site/auto',
            ],
        ],
    ],
    'params' => $params,
];
