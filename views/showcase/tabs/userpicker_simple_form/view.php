<?= "<?php \$form = \yii\widgets\ActiveForm::begin(['action' => ['/devtools/showcase/userpicker-remote']]) ?>\n" ?>
<?= "<?= humhub\modules\user\widgets\UserPickerField::widget([
        'model' => new humhub\modules\devtools\models\forms\UserpickerForm,
        'attribute' => 'guids',
        'form' => \$form
    ]);" ?>?>
    <button data-action-click="ui.modal.submit" data-ui-loader class="btn btn-default">
        <?= Yii::t('DevtoolsModule.views_showcase_tabs_userpicker_simple_try', 'Send')?><?= "\n" ?>
    </button>
<?= '<?php \yii\widgets\ActiveForm::end() ?>' ?>