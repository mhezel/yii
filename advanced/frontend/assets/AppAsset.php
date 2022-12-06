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
        //'css/site.css',
        'css/main.css',
        'css/fontawesome-all.min.css',
    ];
    public $js = [

        'assets/js/jquery.min.js',
        'assets/js/jquery.dropotron.min.js',
        'assets/js/browser.min.js',
        'assets/js/breakpoints.min.js',
        'assets/js/util.js',
        'assets/js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
