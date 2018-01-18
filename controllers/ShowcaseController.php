<?php

namespace humhub\modules\devtools\controllers;

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
class ShowcaseController extends \humhub\components\Controller
{
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }

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
            return ModalDialog::widget([
                    'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Userpicker</strong> guid selection'),
                    'body' => $model->getSelectionString(),
                    'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
            ]);
        }
    }
}

?>
