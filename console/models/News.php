<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 04.10.2018
 * Time: 15:48
 */
namespace  console\models;

use Yii;
class News
{
    const STATUS_NOT_SEND = 1;
    public static function getList(){
        $sql = 'SELECT * FROM news WHERE status ='.self::STATUS_NOT_SEND;
        $result =  Yii::$app->db->createCommand($sql)->queryAll();
        return self::prepareList($result);
    }
    public static function prepareList($result){
        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content'],30);
            }
            return $result;
        }
    }
}