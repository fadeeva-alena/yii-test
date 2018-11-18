<?php
use yii\helpers\Html;

echo Html::tag('p','Some text');
$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
];

echo Html::dropDownList('city_id',[],$array);

echo Html::radioList('city_id',[],$array);

echo Html::checkboxList('city_id',[],$array);

echo Html::img('@images/burger.jpg',[]);