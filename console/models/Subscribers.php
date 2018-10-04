<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 04.10.2018
 * Time: 16:18
 */

namespace console\models;

use Yii;
class Subscribers
{
public static function getList(){
    $sql = 'SELECT * FROM subscriber';
    return Yii::$app->db->createCommand($sql)->queryAll();
}
}