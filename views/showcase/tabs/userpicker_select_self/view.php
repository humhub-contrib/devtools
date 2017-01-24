<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<?= "<?= humhub\modules\user\widgets\UserPickerField::widget([
    'model' => new humhub\modules\devtools\models\forms\UserpickerForm,
    'attribute' => 'guids'
]);" ?>?>
<br />
<button data-action-click="user.picker.selectSelf" data-action-target="#select-self-picker" class="btn btn-default">
    <?= Yii::t('DevtoolsModule.views_showcase_tabs_userpicker_select_self_try', 'Select Yourself'); ?>
</button>
    
<?php humhub\modules\devtools\widgets\CodeView::end();