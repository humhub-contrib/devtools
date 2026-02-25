<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

public function actionRichtextModal()
{
    // Just a plain model object for beeing able to load the post request
    $model = new RichtextExampleModel();

    if($model->load(Yii::$app->request->post())) {
        return \humhub\widgets\modal\Modal::widget([
            'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => $model->richtext]),
            'footer' => \humhub\widgets\modal\ModalButton::cancel(Yii::t('base', 'Close')),
        ]);
    }

    return \humhub\widgets\modal\Modal::widget([
        'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
        'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
        'footer' => \humhub\widgets\modal\ModalButton::cancel(Yii::t('base', 'Close')),
    ]);
}

<?php humhub\modules\devtools\widgets\CodeView::end();