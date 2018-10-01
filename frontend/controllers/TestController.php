<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 27.09.2018
 * Time: 18:58
 */
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;
class TestController extends Controller{
    public function actionIndex(){
        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);
        return $this->render('index',[
          'list'=>$list,
        ]);
    }
    public function actionView($id){
        $item = Test::getItem($id);
        return $this->render('view',[
            'item' => $item
        ]);
    }
    public function actionMail(){
        $result = Yii::$app->mailer->compose()
            ->setFrom('fadaljona@gmail.com')
            ->setTo('fadaljona@gmail.com')
            ->setSubject('mogesh')
            ->setTextBody('ya very v tebya')
            ->setHtmlBody('ya very v tebya')
            ->send();
        var_dump($result);
        die;
    }
}