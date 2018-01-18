<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\controllers;

use humhub\components\Controller;
use humhub\modules\devtools\models\forms\RichtextModel;
use humhub\modules\devtools\models\TestModel;
use humhub\widgets\ModalClose;
use humhub\widgets\ModalDialog;
use humhub\widgets\RichText;
use Yii;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class FormController extends Controller
{
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }

    public function actionIndex()
    {
        $model = new TestModel();

        if($model->load(Yii::$app->request->post())) {
            return $this->renderAjax('result', ['model' => $model]);
        }

        return ModalClose::widget(['error', 'Could not load form data!']);
    }
}

?>
