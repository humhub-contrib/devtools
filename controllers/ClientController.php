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
use humhub\widgets\ModalDialog;
use humhub\widgets\RichText;
use Yii;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class ClientController extends Controller
{
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }

    public function actionHtml()
    {
        return $this->renderAjax('index', [
            'post' => null
        ]);
    }

    public function actionPost()
    {
        $this->forcePostRequest();
        return $this->asJson([
            'result' => $this->renderAjax('index', ['post' => Yii::$app->request->post('content')])
        ]);
    }
}

?>
