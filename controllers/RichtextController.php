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
class RichtextController extends Controller
{
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }

    public $subLayout = "@humhub/modules/devtools/views/index/_layout";

    public function actionModal()
    {
        $model = new RichtextModel();

        if($model->load(Yii::$app->request->post())) {
            return ModalDialog::widget([
                'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext),
                'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
            ]);
        }

        return ModalDialog::widget([
            'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
        ]);
    }

    public function actionPreset()
    {
        $model = new RichtextModel();

        if($model->load(Yii::$app->request->post())) {
            return ModalDialog::widget([
                'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext, ['preset' => 'markdown']),
                'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
            ]);
        }

        return ModalDialog::widget([
            'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
        ]);
    }

    public function actionCustomPreset()
    {
        $model = new RichtextModel();

        if($model->load(Yii::$app->request->post())) {
            return ModalDialog::widget([
                'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext, ['preset' => 'demo']),
                'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
            ]);
        }

        return ModalDialog::widget([
            'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
        ]);
    }

    public function actionExclude()
    {
        $model = new RichtextModel();

        if($model->load(Yii::$app->request->post())) {
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

}

?>
