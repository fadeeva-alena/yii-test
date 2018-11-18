<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 25.10.2018
 * Time: 15:19
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class PhotoAsset extends AssetBundle
{
    public $css=[
        'css/photo/slick.css',
        'css/photo/slick-theme.css',
    ];
    public $js = [
        'js/slick/slick.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}