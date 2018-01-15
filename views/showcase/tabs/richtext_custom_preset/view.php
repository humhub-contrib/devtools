<?php use humhub\modules\devtools\widgets\CodeView; ?>

<?php CodeView::begin(['type' => 'php']); ?>

<?= CodeView::PHP_START ?> $form = ActiveForm::begin() ?>

    <?= CodeView::PHP_START_ECHO ?> $form->field(new RichtextExampleModel(), 'richtext')->widget(\humhub\widgets\RichtextField::class, [
        'preset' => 'demo'
    ]) ?>

    <br>

    <?= CodeView::PHP_START_ECHO ?> \humhub\widgets\ModalButton::submitModal(Url::to(['/devtools/richtext/custom-preset']),  Yii::t('DevtoolsModule.base', 'Submit')) ?>

<?= CodeView::PHP_START ?> ActiveForm::end() ?>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>