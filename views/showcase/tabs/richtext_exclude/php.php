<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

    public function actionExclude()
    {
        $model = new RichtextModel();

        if ($model->load(Yii::$app->request->post())) {
            return ModalDialog::widget([
                'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext, ['exclude' => ['emoji', 'mention', 'table']]),
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