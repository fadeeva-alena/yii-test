<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 14.10.2018
 * Time: 19:14
 */

namespace frontend\controllers;


use yii\web\Controller;
use Yii;
class AliasController extends Controller
{
    public function actionExample(){

        $result = mkdir(Yii::getAlias('@files').'/test3');
        var_dump($result);
    }
}