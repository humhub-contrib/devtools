<?= \humhub\widgets\ModalDialog::widget([
    'header' => Yii::t('DevtoolsModule.views_showcase_remoteModal', '<strong>This</strong> Modal was loaded asynchronously!'),
    'body' => \yii\helpers\Html::encode($content),
    'footer' => '<button class="btn btn-default" data-modal-close>Close</button>',
]) ?>