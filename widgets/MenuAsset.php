<?php
namespace app\widgets;
use yii\web\AssetBundle;

class MenuAsset extends AssetBundle
{
    public $sourcePath = '@app/widgets/assets/menu';
    public $js = [
        'menu.js',
    ];
    public $css = [
        'menu.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
