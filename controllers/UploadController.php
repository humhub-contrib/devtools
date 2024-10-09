<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use Yii;
use humhub\modules\devtools\models\UploadModel;
use yii\helpers\Url;

class UploadController extends DevtoolsController
{
    public function actionModel()
    {
        $model = new UploadModel();

        if ($model->load(Yii::$app->request->post())) {
            return $this->asJson([
                'success' => true,
            ]);
        }

        return $this->asJson([
            'success' => false,
            'error' => Yii::t('DevtoolsModule.base', 'No files selected!'),
        ]);
    }
}
