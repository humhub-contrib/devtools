<?php

use humhub\widgets\modal\Modal;
use humhub\widgets\modal\ModalButton;
use yii\helpers\Html;

/* @var $content string */
?>
<?php Modal::beginDialog([
    'title' => Yii::t('DevtoolsModule.views_showcase_remoteModal', '<strong>This</strong> Modal was loaded asynchronously!'),
    'footer' => ModalButton::cancel('Close'),
]) ?>
    <?= Html::encode($content) ?>
<?php Modal::endDialog() ?>
