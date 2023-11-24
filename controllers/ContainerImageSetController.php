<?php

namespace humhub\modules\devtools\controllers;


use humhub\modules\devtools\models\ContainerImageSetModel;
use humhub\widgets\ModalClose;
use Yii;

class ContainerImageSetController extends DevtoolsController
{
    public function actionIndex()
    {
        $model = new ContainerImageSetModel();
        if ($model->load(Yii::$app->request->post())) {
            return $this->renderAjax('../widgets/image_set/result', ['model' => $model]);
        }

        return ModalClose::widget(['error', 'Could not load form data!']);
    }
}