<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

Preselect by using the $items array:

<?= "<?= humhub\modules\user\widgets\UserPickerField::widget([
    'model' => new humhub\modules\devtools\models\forms\UserpickerForm,
    'attribute' => 'guids',
    'items' => [Yii::\$app->user->getIdentity()]
]);" ?>?>

<br />

Preselect by using model attribute value:

<?= "<?php
    \$model = new humhub\modules\devtools\models\forms\UserpickerForm;
    \$model->guids = [Yii::\$app->user->getIdentity()->guid];
?>" ?>

<?= "<?= humhub\modules\user\widgets\UserPickerField::widget([
    'model' => \$model,
    'attribute' => 'guids'
]);" ?>?>
    
<?php humhub\modules\devtools\widgets\CodeView::end();