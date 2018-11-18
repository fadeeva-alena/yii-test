<?php
/**
 * Created by PhpStorm.
 * User: ALENA
 * Date: 05.10.2018
 * Time: 10:29
 */

namespace frontend\models;

use yii\base\Model;
use Yii;
class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $dateBirth;
    public $dateWork;
    public $city;
    public $position;
    public $idCode;
    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName','middleName','email',
                'dateBirth','dateWork', 'city', 'position', 'idCode'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName','middleName'],
        ];
    }
    public function rules()
    {
        return [
            [['firstName','lastName','email', 'dateWork','position', 'idCode'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' =>self::SCENARIO_EMPLOYEE_UPDATE],
            [['dateBirth', 'dateWork'], 'date', 'format'=>'php: Y-m-d'],
            [['city'], 'integer'],
            [['position'],'string'],
            [['idCode'],'string', 'length'=>10],
        ];
    }
    public function save(){
        $sql = "INSERT INTO employee (id, firstName, lastName, middleName, email, dateBirth, dateWork, city, position, idCode) 
                VALUES (null, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', '{$this->email}', '{$this->dateBirth}','{$this->dateWork}','{$this->city}','{$this->position}','{$this->idCode}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }
    public static function getHighestSalary($max){
        $max = intval($max);
        $sql = 'SELECT * FROM employee ORDER BY salary DESC LIMIT '.$max;
        return $result = Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function find(){
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}