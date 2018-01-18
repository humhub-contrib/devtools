<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\widgets\ModalButton;
use humhub\widgets\ModalDialog;
use humhub\modules\devtools\models\TestModel;
use humhub\widgets\RichText;
use yii\widgets\DetailView;
use humhub\modules\user\widgets\Image as UserImage;

/* @var $this \humhub\components\View */
/* @var $model TestModel */
?>

<?php ModalDialog::begin(['header' => Yii::t('DevtoolsModule.views_client_result', 'Result')]); ?>
    <div class="modal-body">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'text',
                [
                    'attribute' => 'richtext',
                    'format' => 'raw',
                    'contentOptions' => ['data-ui-markdown' => true],
                    'value' => function ($model) {
                        /* @var $model TestModel */
                        return RichText::widget(['text' => $model->richtext]);
                    }
                ],
                [
                    'attribute' => 'user',
                    'format' => 'raw',
                    'value' => function ($model) {
                        /* @var $model TestModel */
                        $result = '';

                        foreach ($model->getUserModels() as $user) {
                            $result .= UserImage::widget(['user' => $user, 'width' => 34]) . '&nbsp;';
                        }

                        return $result;
                    }
                ],
                [
                    'attribute' => 'selection',
                    'value' => function ($model) {
                        /* @var $model TestModel */
                        return $model->getSelectionText();
                    }
                ],
            ],
        ]); ?>
    </div>
    <div class="modal-footer">
        <?= ModalButton::cancel(Yii::t('base', 'Close')) ?>
    </div>
<?php ModalDialog::end() ?>