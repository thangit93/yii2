<?php
namespace app\assets;

use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle
{
    public $sourcePath = '@bower/metisMenu';
    public $css = [
        'dist/metisMenu.min.css'
    ];
    public $js = [
        'dist/metisMenu.min.js'
    ];
}