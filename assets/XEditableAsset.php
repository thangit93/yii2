<?php
namespace app\assets;

use yii\web\AssetBundle;

class XEditableAsset extends AssetBundle
{
    public $sourcePath = '@bower/x-editable/dist';
    public $css = [
        'bootstrap3-editable/css/bootstrap-editable.css',
    ];
    public $js = [
        'bootstrap3-editable/js/bootstrap-editable.min.js',
    ];
}