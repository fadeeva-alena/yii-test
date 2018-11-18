<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 18.11.2018
 * Time: 20:29
 */

namespace frontend\controllers;


use yii\web\Controller;

class HtmlHelperController extends Controller
{
    public function actionDemo(){
        return $this->render('demo');
    }
    public function actionEscapeOutput(){
        $comments = [
            [
                'id' => 10,
                'author' => 'Student',
                'text' => 'Hello!',
            ],
            [
                'id' => 11,
                'author' => 'Victor',
                'text' => 'Hello! How are you?',
            ],
        ];
        return $this->render('escape-output',[
            'comments' => $comments
        ]);
    }
}