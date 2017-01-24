Preselect by using the $selection array:

<?= humhub\modules\user\widgets\UserPickerField::widget([
    'model' => new humhub\modules\devtools\models\forms\UserpickerForm,
    'attribute' => 'guids',
    'selection' => [Yii::$app->user->getIdentity()]
]);
?>

<br />

Preselect by using model attribute value:

<?php
    $model = new humhub\modules\devtools\models\forms\UserpickerForm;
    $model->guids = [Yii::$app->user->getIdentity()->guid];
?>

<?= humhub\modules\user\widgets\UserPickerField::widget([
    'model' => $model,
    'attribute' => 'guids'
]);
?>

