<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 27.09.2018
 * Time: 19:19
 */
namespace frontend\models;

use Yii;
class Test{
    /**
     * @param integer $max
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getNewsList($max){
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT '.$max;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content'],30);
            }
            return $result;
        }
    }

    /**
     * @param integer $id
     * @return array|false
     * @throws \yii\db\Exception
     */
    public static function getItem($id){
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id=".$id;
        return Yii::$app->db->createCommand($sql)->queryOne();

    }
}