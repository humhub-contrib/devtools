FormController:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

public function actionIndex()
{
    $model = new TestModel();

    if($model->load(Yii::$app->request->post())) {
        return $this->renderAjax('result', ['model' => $model]);
    }

    return ModalClose::widget(['error', 'Could not load form data!']);
}
<?php humhub\modules\devtools\widgets\CodeView::end();?>


Result View:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?>

use humhub\widgets\ModalButton;
use humhub\widgets\ModalDialog;
use humhub\modules\devtools\models\TestModel;
use humhub\widgets\RichText;
use yii\widgets\DetailView;
use humhub\modules\user\widgets\Image as UserImage;

/* @var $this \humhub\components\View */
/* @var $model TestModel */
?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> ModalDialog::begin(['header' => Yii::t('DevtoolsModule.views_client_result', 'Result')]); ?>
<div class="modal-body">
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> DetailView::widget([
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
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?>ModalButton::cancel(Yii::t('base', 'Close')) ?>
</div>
<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> ModalDialog::end() ?>
<?php humhub\modules\devtools\widgets\CodeView::end();
