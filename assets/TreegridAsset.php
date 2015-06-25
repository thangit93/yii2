<?php
namespace app\assets;

use yii\web\AssetBundle;

class Treegrid extends AssetBundle
{
    public $sourcePath = '@bower/jquery-trrgrid';
    public $css = [
        'morris.css',
    ];
    public $js = [
        'morris.min.js',
    ];
}