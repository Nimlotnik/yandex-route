<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    	'css/animate.css',
        'css/style.css',
    	'css/unite-gallery.css',
    ];
    public $js = [
    	'https://api-maps.yandex.ru/2.1/?lang=ru_RU',
    	'js/my.js',
    	'js/form.js',
    	'js/unitegallery.min.js',
    	'js/ug-theme-compact.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
