Controller Action:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

public function actionUserpickerRemote()
{
    $this->forcePostRequest();

    $model = new \humhub\modules\devtools\models\forms\UserpickerForm();

    if ($model->load(Yii::$app->request->post())) {
        return \humhub\widgets\ModalDialog::widget([
                'header' => Yii::t('DevtoolsModule.controllers_ShowcaseController', '<strong>Userpicker</strong> guid selection'),
                'body' => $model->getSelectionString(),
                'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
        ]);
    }
}
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>


Model:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

namespace humhub\modules\devtools\models\forms;

use Yii;
use yii\base\Model;

class UserpickerForm extends Model
{
    public $guids = [];
    
    public function rules()
    {
        return [
            ['guids', 'safe']
        ];
    }
    
    public function getSelectionString() {
        if(empty($this->guids)) {
            return Yii::t('DevtoolsModule.controllers_ShowcaseController', 'Empty selection!');
        } else {
            return Html::encode(implode(', ', $this->guids));
        }
    }
}
<?php humhub\modules\devtools\widgets\CodeView::end();

