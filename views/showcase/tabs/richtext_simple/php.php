<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

public function actionRichtextModal()
{
    // Just a plain model object for beeing able to load the post request
    $model = new RichtextExampleModel();

    if($model->load(Yii::$app->request->post())) {
        return ModalDialog::widget([
            'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => $model->richtext]),
            'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
        ]);
    }

    return ModalDialog::widget([
        'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
        'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
        'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
    ]);
}

<?php humhub\modules\devtools\widgets\CodeView::end();