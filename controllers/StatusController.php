<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 29.08.2017
 * Time: 22:40
 */

namespace humhub\modules\devtools\controllers;


use humhub\widgets\ModalClose;
use Yii;
use humhub\components\Controller;
use yii\helpers\Url;

class StatusController extends Controller
{
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }

    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';

    public function actionIndex($type)
    {
        switch($type) {
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
        switch($type) {
            case self::TYPE_SUCCESS:
                return ModalClose::widget(['success' => Yii::t('DevtoolsModule.views_showcase_status', 'Success')]);
                break;
            case self::TYPE_WARNING:
                return ModalClose::widget(['warn' => Yii::t('DevtoolsModule.views_showcase_status', 'Warning')]);
            case self::TYPE_ERROR:
                return ModalClose::widget(['error' => Yii::t('DevtoolsModule.views_showcase_status', 'Error')]);
            case self::TYPE_INFO:
                return ModalClose::widget(['info' => Yii::t('DevtoolsModule.views_showcase_status', 'Info')]);
        }

        return $this->renderPartial('modal');
    }
}