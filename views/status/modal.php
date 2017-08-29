<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

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
