<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=

<<<HTML

<?php

use humhub\widgets\Button;

?>

<?= Button::success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'))->action('demo.status.simple.success')->loader(false) ?>

<?= Button::danger(Yii::t('DevtoolsModule.views_showcase_status', 'Error!'))->action('demo.status.simple.error')->loader(false) ?>

<?= Button::info(Yii::t('DevtoolsModule.views_showcase_status', 'Info'))->action('demo.status.simple.info')->loader(false) ?>

<?= Button::warning(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'))->action('demo.status.simple.warn')->loader(false) ?>
HTML;

?>




<?php humhub\modules\devtools\widgets\CodeView::end();