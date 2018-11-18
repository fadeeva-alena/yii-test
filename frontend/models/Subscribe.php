<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 06.10.2018
 * Time: 18:37
 */

namespace frontend\models;
use yii\base\Model;

class Subscribe extends Model
{
    public $email;
    public function rules(){
        return[
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }
    public function save(){
        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')";
        return \Yii::$app->db->createCommand($sql)->execute();
    }
}