<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'vendor/bower/metisMenu/dist/metisMenu.min.css',
        'css/timeline.css',
        'css/sb-admin-2.css',
        'vendor/bower/morrisjs/morris.css',
        'vendor/bower/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        //'vendor/bower/jquery/dist/jquery.min.js',
        'vendor/bower/bootstrap/dist/js/bootstrap.min.js',
        'vendor/bower/metisMenu/dist/metisMenu.min.js',
        'vendor/bower/raphael/raphael-min.js',
        'vendor/bower/morrisjs/morris.min.js',
        'js/morris-data.js',
        'js/sb-admin-2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
