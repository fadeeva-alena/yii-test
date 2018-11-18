<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 25.10.2018
 * Time: 15:11
 */

namespace frontend\controllers;


use yii\web\Controller;

class PhotoController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}