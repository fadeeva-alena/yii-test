<?php

/* @var $this \yii\web\View */
/* @var $model frontend\models\Subscribe */
//if (Yii::$app->session->hasFlash('subscribeStatus')){
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}
$this->title = "Подпишитесь на новости";
$this->registerMetaTag([
   'name'=>'description',
    'content' => 'Description of the page'
]);
if($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>
<form action="" method="post">
    <p>Email:</p>
    <input type="text" name="email">
    <br><br>
    <input type="submit">
</form >