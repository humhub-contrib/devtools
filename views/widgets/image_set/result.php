<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\devtools\models\ContainerImageSetModel;
use humhub\modules\space\models\Space;
use humhub\modules\ui\widgets\ContainerImageSet;
use humhub\modules\user\models\User;
use humhub\widgets\ModalButton;
use humhub\widgets\ModalDialog;

/* @var $this \humhub\components\View */
/* @var $model ContainerImageSetModel */
?>

<?php ModalDialog::begin(['header' => Yii::t('DevtoolsModule.views_client_result', 'Result')]); ?>
    <div class="modal-body">
        <?= ContainerImageSet::widget([
            'items' => $model->instance === 'user' ? User::find()->indexBy('id')->all() : Space::find()->indexBy('id')->all(),
            'max' => ! empty($model->max) ? $model->max : 5,
            'width' => ! empty($model->width) ? $model->width : 50,
            'height' => ! empty($model->height) ? $model->height : null,
            'htmlOptions' => ! empty($model->htmlOptions) ? $model->prepareOptions('htmlOptions') : [],
            'link' => $model->link,
            'linkOptions' => ! empty($model->linkOptions) ? $model->prepareOptions('linkOptions') : [],
            'showTooltip' => $model->tooltip,
            'imageOptions' => ! empty($model->imageOptions) ? $model->prepareOptions('imageOptions') : [],
            'hiddenImageWidth' => ! empty($model->hiddenImageWidth) ? $model->hiddenImageWidth : 50,
            'hiddenImageHeight' => ! empty($model->hiddenImageHeight) ? $model->hiddenImageHeight : null,
        ]); ?>
    </div>
    <div class="modal-footer">
        <?= ModalButton::cancel(Yii::t('base', 'Close')) ?>
    </div>
<?php ModalDialog::end() ?>