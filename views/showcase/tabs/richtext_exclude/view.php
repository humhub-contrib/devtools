<?php use humhub\modules\devtools\widgets\CodeView; ?>

<?php CodeView::begin(['type' => 'php']); ?>

<?= CodeView::PHP_START ?> $form = ActiveForm::begin() ?>

    <?= CodeView::PHP_START_ECHO ?> $form->field(new RichtextExampleModel(), 'richtext')->widget(\humhub\modules\content\widgets\richtext\RichTextField::class, [
        'id' => 'markdown_richtext',
        'exclude' => ['emoji', 'mention', 'table']
    ]) ?>

    <br>

    <?= CodeView::PHP_START_ECHO ?> \humhub\widgets\ModalButton::submitModal(Url::to(['/devtools/showcase/richtext-modal-preset']),  Yii::t('DevtoolsModule.base', 'Submit')) ?>

<?= CodeView::PHP_START ?> ActiveForm::end() ?>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>