<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 30.10.2018
 * Time: 13:05
 */

namespace frontend\widgets\HighSalary;

use yii\base\Widget;
use frontend\models\Employee;
use Yii;
class HighSalary extends Widget
{
    public $showLimit = null;
    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];
        if ($this->showLimit){
            $max= $this->showLimit;
        }
        $list = Employee::getHighestSalary($max);
        return $this->render('block',[
            'list'=>$list,
        ]);
    }

}