<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

namespace humhub\modules\devtools\controllers;


use humhub\widgets\ModalClose;
use Yii;
use humhub\components\Controller;
use yii\helpers\Url;

class StatusController extends Controller
{
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';

    public function actionModal($type = null)
    {
        switch ($type) {
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

<?php humhub\modules\devtools\widgets\CodeView::end();