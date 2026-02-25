<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use humhub\components\Controller;
use humhub\modules\content\widgets\richtext\RichText;
use humhub\modules\devtools\models\forms\RichtextModel;
use humhub\widgets\modal\Modal;
use humhub\widgets\modal\ModalButton;
use Yii;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class RichtextController extends DevtoolsController
{
    public $subLayout = "@humhub/modules/devtools/views/index/_layout";

    public function actionModal()
    {
        $model = new RichtextModel();

        if ($model->load(Yii::$app->request->post())) {
            return Modal::widget([
                'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext),
                'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
            ]);
        }

        return Modal::widget([
            'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
        ]);
    }

    public function actionPreset()
    {
        $model = new RichtextModel();

        if ($model->load(Yii::$app->request->post())) {
            return Modal::widget([
                'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext, ['preset' => 'markdown']),
                'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
            ]);
        }

        return Modal::widget([
            'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
        ]);
    }

    public function actionCustomPreset()
    {
        $model = new RichtextModel();

        if ($model->load(Yii::$app->request->post())) {
            return Modal::widget([
                'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext, ['preset' => 'demo']),
                'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
            ]);
        }

        return Modal::widget([
            'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
        ]);
    }

    public function actionExclude()
    {
        $model = new RichtextModel();

        if ($model->load(Yii::$app->request->post())) {
            return Modal::widget([
                'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
                'body' => RichText::output($model->richtext, ['exclude' => ['emoji', 'mention', 'table']]),
                'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
            ]);
        }

        return Modal::widget([
            'title' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Richtext</strong> result'),
            'body' => RichText::widget(['text' => 'Richtext could not be loaded']),
            'footer' => ModalButton::cancel(Yii::t('base', 'Close')),
        ]);
    }
}
