<h1>modal.php</h1>
<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=

<<<HTML

<?php

use humhub\widgets\ModalButton;
use humhub\widgets\ModalDialog;
use yii\helpers\Url;

?>

<?php ModalDialog::begin(['header' => Yii::t('DevtoolsModule.views_showcase_status', '<strong>Satus</strong> modal')]) ?>

    <div class="modal-footer">
        <?= ModalButton::success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'))->load(Url::to(['/devtools/status/modal', 'type' => 'success']))->loader(true); ?>

        <?= ModalButton::info(Yii::t('DevtoolsModule.views_showcase_status', 'Info'))->load(Url::to(['/devtools/status/modal', 'type' => 'info']))->loader(true); ?>

        <?= ModalButton::warning(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'))->load(Url::to(['/devtools/status/modal', 'type' => 'warning']))->loader(true); ?>

        <?= ModalButton::danger(Yii::t('DevtoolsModule.views_showcase_status', 'Error'))->load(Url::to(['/devtools/status/modal', 'type' => 'error']))->loader(true); ?>
    </div>

<?php ModalDialog::end() ?>
HTML;

?>

<?php humhub\modules\devtools\widgets\CodeView::end();?>

<br>

<h1>Modal Trigger Button</h1>

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=

<<<HTML

<?= ModalButton::defaultType(Yii::t('DevtoolsModule.views_showcase_status', 'Open Modal'))->load(Url::to(['/devtools/status/modal'])); ?>

HTML;

?>

<?php humhub\modules\devtools\widgets\CodeView::end();?>


