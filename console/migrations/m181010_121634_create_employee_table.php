<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m181010_121634_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'firstName' =>$this->string(),
            'lastName' =>$this->string(),
            'middleName' =>$this->string(),
            'salary' =>$this->string(),
            'email' =>$this->string(),
            'dateBirth' =>$this->string(),
            'dateWork' =>$this->string(),
            'city' =>$this->integer(),
            'position' =>$this->string(),
            'idCode' =>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
}
