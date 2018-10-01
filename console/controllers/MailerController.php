<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 30.09.2018
 * Time: 20:01
 */
namespace console\controllers;
use yii\console\Controller;
use Yii;
class MailerController extends Controller
{
    public function actionSend(){
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