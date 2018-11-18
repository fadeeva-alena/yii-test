<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 05.10.2018
 * Time: 10:31
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Employee;
use Yii;
use frontend\models\example\Animal;
use frontend\models\example\Human;
class EmployeeController extends Controller
{
    public function actionIndex(){
        $employee1 = new Employee();
        $employee1->firstName='Alex';
        $employee1->lastName='Smith';
        $employee1->middleName='John';
        $employee1->salary=1000;
        echo $employee1['salary'];
    }
    public function actionTest(){
        $human1 = new Human();
        $animal1 = new Animal();
        $animal1->walk();
        $human1->walk();
    }
    public function actionRegister(){
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost){
            $model->attributes=$formData;
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }
        return $this->render('register',[
            'model' => $model,
        ]);
    }
    public function actionUpdate(){
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost){
            $model->attributes=$formData;
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Updated!');
            }
        }
        return $this->render('update',[
            'model' => $model,
        ]);
    }
}