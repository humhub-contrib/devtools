<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=
<<<HTML
    
<form>
    <?= \humhub\modules\file\widgets\UploadButton::widget([
        'id' => 'demo-file-upload',
        'max' => 2,
        'dropZone' => '#demo-drop-zone',
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

    <div id="demo-drop-zone" style="height:100px;border:1px solid #ededed">
        <h1>DropZone</h1>
    </div>
</form>

HTML;

?>
<?php humhub\modules\devtools\widgets\CodeView::end();