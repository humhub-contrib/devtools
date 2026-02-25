<?php use humhub\modules\devtools\widgets\CodeView; ?>

<?php CodeView::begin(['type' => 'php']); ?>

<?= CodeView::PHP_START ?> $form = ActiveForm::begin() ?>

    <?= CodeView::PHP_START_ECHO ?> $form->field(new RichtextExampleModel(), 'richtext')->widget(\humhub\modules\content\widgets\richtext\RichTextField::class, [
        'preset' => 'demo'
    ]) ?>

    <br>

    <?= CodeView::PHP_START_ECHO ?> \humhub\widgets\modal\ModalButton::save(Yii::t('DevtoolsModule.base', 'Submit'))->submit(Url::to(['/devtools/richtext/custom-preset'])) ?>

<?= CodeView::PHP_START ?> ActiveForm::end() ?>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>