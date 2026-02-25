<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\content\widgets\richtext\RichText;
use humhub\modules\devtools\models\TestModel;
use humhub\modules\user\widgets\Image as UserImage;
use humhub\widgets\modal\Modal;
use humhub\widgets\modal\ModalButton;
use yii\widgets\DetailView;

/* @var $this \humhub\components\View */
/* @var $model TestModel */
?>

<?php Modal::beginDialog([
    'title' => Yii::t('DevtoolsModule.views_client_result', 'Result'),
    'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
]); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'text',
            [
                'attribute' => 'richtext',
                'format' => 'raw',
                'contentOptions' => ['data-ui-markdown' => true],
                'value' => /* @var $model TestModel */
                fn($model) => RichText::output($model->richtext)
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
                'value' => /* @var $model TestModel */
                fn($model) => $model->getSelectionText()
            ],
        ],
    ]); ?>
<?php Modal::endDialog() ?>