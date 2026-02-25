<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use humhub\widgets\modal\ModalClose;
use yii\helpers\Url;
use Yii;

class StatusController extends DevtoolsController
{
    public const TYPE_SUCCESS = 'success';
    public const TYPE_WARNING = 'warning';
    public const TYPE_ERROR = 'error';
    public const TYPE_INFO = 'info';

    public function actionIndex($type)
    {
        switch ($type) {
            case self::TYPE_SUCCESS:
                $this->view->success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'));
                break;
            case self::TYPE_WARNING:
                $this->view->warn(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'));
                break;
            case self::TYPE_ERROR:
                $this->view->error(Yii::t('DevtoolsModule.views_showcase_status', 'Error'));
                break;
            case self::TYPE_INFO:
                $this->view->info(Yii::t('DevtoolsModule.views_showcase_status', 'Info'));
                break;
        }

        $this->redirect(Url::to(['/devtools/showcase/view', 'id' => 'status']));
    }

    public function actionModal($type = null)
    {
        return match ($type) {
            self::TYPE_SUCCESS => ModalClose::widget(['success' => Yii::t('DevtoolsModule.views_showcase_status', 'Success')]),
            self::TYPE_WARNING => ModalClose::widget(['warn' => Yii::t('DevtoolsModule.views_showcase_status', 'Warning')]),
            self::TYPE_ERROR => ModalClose::widget(['error' => Yii::t('DevtoolsModule.views_showcase_status', 'Error')]),
            self::TYPE_INFO => ModalClose::widget(['info' => Yii::t('DevtoolsModule.views_showcase_status', 'Info')]),
            default => $this->renderPartial('modal'),
        };
    }
}
