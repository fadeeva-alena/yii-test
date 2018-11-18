<?php
/* @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');
echo implode(', ', $emails);

//Array helpers with HTML lists;
echo '<hr>';

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
];

$listData = ArrayHelper::map($employees, 'id', 'email');
echo Html::dropDownList('emails',[],$listData);