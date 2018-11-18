<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 24.10.2018
 * Time: 13:50
 */
namespace frontend\widgets\newsList;

use yii\base\Widget;
use frontend\models\Test;
use Yii;
class NewsList extends Widget
{
    public $showLimit = null;
    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];
        if ($this->showLimit){
            $max= $this->showLimit;
        }
        $list = Test::getNewsList($max);
        return $this->render('block',[
            'list'=>$list,
        ]);
    }
}