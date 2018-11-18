<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 18.10.2018
 * Time: 19:18
 */

namespace frontend\controllers;

use yii\web\Controller;

class GalleryController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}