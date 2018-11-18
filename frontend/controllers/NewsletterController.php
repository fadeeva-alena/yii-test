<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 06.10.2018
 * Time: 18:00
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

class NewsletterController extends Controller
{
    public function actionSubscribe(){
        $formData = Yii::$app->request->post();
        $model = new Subscribe();
        if(Yii::$app->request->isPost){
            $model->email = $formData['email'];
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', "Subscribe complete!!");
            }
        }
        return $this->render('subscribe',[
            'model' =>$model,
        ]);
    }

}