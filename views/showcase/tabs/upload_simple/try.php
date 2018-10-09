<form>
    <?= \humhub\modules\file\widgets\UploadButton::widget([
        'id' => 'demo-file-upload',
        'max' => 2,
        'dropZone' => '#demo-drop-zone_old',
        'preview' => '#demo-preview',
        'progress' => '#demo-progress',
        'buttonOptions' => [
            'style' => 'position: relative;overflow: hidden;'
        ]
    ])?>

    <?= \humhub\modules\file\widgets\UploadProgress::widget(['id' => 'demo-progress'])?>
    
    <?= \humhub\modules\file\widgets\FilePreview::widget([
        'id' => 'demo-preview',
        'options' => [
            'style' => 'margin:10px'
        ]]) ?>

    <br><br>
    
    <div id="demo-drop-zone_old" class="alert alert-info">
        <h1>DropZone</h1>
    </div>
</form>

    <br><br>

<div class="alert alert-info">
    <?= Yii::t('DevtoolsModule.base', '<strong>Note:</strong> Uploaded files have to be attached to an ActiveRecord, otherwise they will be cleaned by the cronjob.')?>
    <?= Yii::t('DevtoolsModule.base', 'The upload component will add inputs with the relaed file guid to the surrounding form, by default with the name \'fileList[]\'.')?>
    <br><br>
    <?= Yii::t('DevtoolsModule.base', 'You can attach uploaded files to your model as follows:')?>
    <br><br>
    <code>$message->fileManager->attach(Yii::$app->request->post('fileList'));</code>
</div>