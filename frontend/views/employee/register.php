<?php /* @var $model frontend\models\Employee */
//if (Yii::$app->session->hasFlash('subscribeStatus')){
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}
if($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>
<h1>Welcome to our company</h1>
<form action="" method="post">
    <p>First name:</p>
    <input type="text" name="firstName">
    <br><br>

    <p>Last name:</p>
    <input type="text" name="lastName">
    <br><br>

    <p>Middle name:</p>
    <input type="text" name="middleName">
    <br><br>

    <p>Email:</p>
    <input type="text" name="email">
    <br><br>

    <p>Дата рождения:</p>
    <input type="text" name="dateBirth">
    <br><br>

    <p>Дата начала работы:</p>
    <input type="text" name="dateWork">
    <br><br>

    <p>Город:</p>
    <select name="city" id="">
        <option value="1">Kyiv</option>
        <option value="2">Harkow</option>
        <option value="3">Dnepr</option>
    </select>
    <br><br>

    <p>Должность:</p>
    <input type="text" name="position">
    <br><br>

    <p>Код:</p>
    <input type="text" name="idCode">
    <br><br>
    <input type="submit">
</form>