<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 29.09.2018
 * Time: 15:16
 */

namespace common\components;

use Yii;
class StringHelper
{
    private $limit;
    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

    public function getShort($string, $limit = null){
        if ($limit === null){
            $limit = $this->limit;
        }
        return substr($string, 0,$limit);
    }

}