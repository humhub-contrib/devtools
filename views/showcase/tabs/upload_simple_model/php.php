<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

Controller:

<?=
<<<'PHP'
use Yii;
use humhub\modules\devtools\models\UploadModel;
use yii\helpers\Url;

class UploadController extends DevtoolsController
{
    public function actionModel()
    {
        $model = new UploadModel();

        if($model->load(Yii::$app->request->post())) {
            // Here you should attach your file to your model either in the afterSave or manually
            return $this->asJson([
                'success' => true
            ]);
        }

        return $this->asJson([
            'success' => false,
            'error' => Yii::t('DevtoolsModule.base', 'No files selected!')
        ]);
    }
}

PHP;

?>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

View:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=
<<<'HTML'
<form>
    <?php $upload = \humhub\modules\file\widgets\Upload::withName(); ?>

    <?= $upload->button([
            'max' => 2,
            'dropZone' => '#demo-drop-zone',
            'buttonOptions' => ['style' => 'position: relative;overflow: hidden;']
        ]); ?>

    <?= $upload->progress(); ?>
    <?= $upload->preview(['options' => ['style' => 'margin:10px']]);  ?>

    <br><br>
    
    <div id="demo-drop-zone" class="alert alert-warn">
        <h1>DropZone</h1>
    </div>
</form>

HTML;

?>
<?php humhub\modules\devtools\widgets\CodeView::end();