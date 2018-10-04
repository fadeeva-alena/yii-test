<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 04.10.2018
 * Time: 19:51
 */

namespace console\components;

use Yii;
class Sender
{
    public static function run($sub,$newsList){
        foreach ($sub as $subcriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist',[
                'newsList' =>$newsList,
            ])
                ->setFrom('fadaljona@gmail.com')
                ->setTo($subcriber['email'])
                ->setSubject('mogesh')
                ->send();
            var_dump($result);
        }
    }

}