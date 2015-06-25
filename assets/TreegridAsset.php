<?php
namespace app\assets;

use yii\web\AssetBundle;

class TreegridAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-treegrid';
    public $css = [
        'css/jquery.treegrid.css',
    ];
    public $js = [
        'js/jquery.treegrid.min.js',
    ];
}