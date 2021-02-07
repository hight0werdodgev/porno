<?php


namespace app\assets;


use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "dist/main.min.css",
    ];
    public $js = [
        "dist/main.min.js",
        "dist/js/google_tags.js",
        "https://www.googletagmanager.com/gtag/js?id=UA-174139974-1"
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];
    public $depends = [
    ];
}