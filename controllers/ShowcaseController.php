<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use humhub\widgets\modal\Modal;
use humhub\widgets\modal\ModalButton;
use Yii;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class ShowcaseController extends DevtoolsController
{
    public $subLayout = "@humhub/modules/devtools/views/index/_layout";

    /**
     * Configuration Action for Super Admins
     */
    public function actionView($id)
    {
        return $this->render(stripslashes(str_replace('/', '', $id)));
    }

    /**
     * Configuration Action for Super Admins
     */
    public function actionLoadModal($content = 'This is my remote modal body!')
    {
        return $this->renderAjax('remoteModal', ['content' => $content]);
    }

    /**
     * Configuration Action for Super Admins
     */
    public function actionLoaderRemote()
    {
        Yii::$app->response->format = 'json';
        return ['output' => time()];
    }

    public function actionUserpickerRemote()
    {
        $this->forcePostRequest();

        $model = new \humhub\modules\devtools\models\forms\UserpickerForm();

        if ($model->load(Yii::$app->request->post())) {
            return Modal::widget([
                'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Userpicker</strong> guid selection'),
                'body' => $model->getSelectionString(),
                'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
            ]);
        }
    }
}
