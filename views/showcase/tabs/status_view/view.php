<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

<<<HTML

<?php

use humhub\widgets\Button;
use yii\helpers\Url;

?>

<?= Button::success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'))->link(Url::to(['/devtools/status', 'type' => 'success']))->loader(true); ?>

<?= Button::info(Yii::t('DevtoolsModule.views_showcase_status', 'Info'))->link(Url::to(['/devtools/status', 'type' => 'info']))->loader(true); ?>

<?= Button::warning(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'))->link(Url::to(['/devtools/status', 'type' => 'warning']))->loader(true); ?>

<?= Button::danger(Yii::t('DevtoolsModule.views_showcase_status', 'Error'))->link(Url::to(['/devtools/status', 'type' => 'error']))->loader(true); ?>
HTML;

?>

<?php humhub\modules\devtools\widgets\CodeView::end();