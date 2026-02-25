<h1>modal.php</h1>
<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=

<<<HTML

<?php

use humhub\widgets\modal\Modal;
use humhub\widgets\modal\ModalButton;
use yii\helpers\Url;

?>

<?php Modal::beginDialog([
    'title' => Yii::t('DevtoolsModule.views_showcase_status', '<strong>Status</strong> modal'),
    'footer' => ModalButton::success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'))->load(Url::to(['/devtools/status/modal', 'type' => 'success']))->loader(true)
        . ModalButton::accent(Yii::t('DevtoolsModule.views_showcase_status', 'Info'))->load(Url::to(['/devtools/status/modal', 'type' => 'info']))->loader(true)
        . ModalButton::warning(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'))->load(Url::to(['/devtools/status/modal', 'type' => 'warning']))->loader(true)
        . ModalButton::danger(Yii::t('DevtoolsModule.views_showcase_status', 'Error'))->load(Url::to(['/devtools/status/modal', 'type' => 'error']))->loader(true),
]) ?>

<?php Modal::endDialog() ?>
HTML;

?>

<?php humhub\modules\devtools\widgets\CodeView::end();?>

<br>

<h1>Modal Trigger Button</h1>

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=

<<<HTML

<?= ModalButton::light(Yii::t('DevtoolsModule.views_showcase_status', 'Open Modal'))->load(Url::to(['/devtools/status/modal'])); ?>

HTML;

?>

<?php humhub\modules\devtools\widgets\CodeView::end();?>


