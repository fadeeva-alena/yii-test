<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 18.11.2018
 * Time: 21:11
 */

namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\Employee;

class ArrayHelperController extends Controller
{
    public function actionDemo(){
        $employees = Employee::find();
        return $this->render('demo',[
            'employees' => $employees,
        ]);
    }
}