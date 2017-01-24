<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<?= "<?= humhub\modules\user\widgets\UserPickerField::widget([
    'model' => new humhub\modules\devtools\models\forms\UserpickerForm,
    'attribute' => 'guids',
    'maxSelection' => 1
]);" ?>?>
    
<?php humhub\modules\devtools\widgets\CodeView::end();