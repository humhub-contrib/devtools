<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\widgets\Link;
use yii\helpers\Url;

?>

<?= Link::success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'))->href(Url::to(['/devtools/status', 'type' => 'success'])); ?>

<?= Link::info(Yii::t('DevtoolsModule.views_showcase_status', 'Info'))->href(Url::to(['/devtools/status', 'type' => 'info'])); ?>

<?= Link::warning(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'))->href(Url::to(['/devtools/status', 'type' => 'warning'])); ?>

<?= Link::danger(Yii::t('DevtoolsModule.views_showcase_status', 'Error'))->href(Url::to(['/devtools/status', 'type' => 'error'])); ?>

