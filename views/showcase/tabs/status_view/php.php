<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

namespace humhub\modules\devtools\controllers;


use Yii;
use humhub\components\Controller;
use yii\helpers\Url;

class StatusController extends Controller
{
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';

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
}

<?php humhub\modules\devtools\widgets\CodeView::end();