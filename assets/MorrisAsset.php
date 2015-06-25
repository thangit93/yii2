<?php
namespace app\assets;

use yii\web\AssetBundle;

class MorrisAsset extends AssetBundle
{
    public $sourcePath = '@bower/morrisjs';
    public $css = [
        'morris.css',
    ];
    public $js = [
        'morris.min.js',
    ];
}