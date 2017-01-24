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
    
    <div id="demo-progress" style="display:none;margin-top:5px;"></div>
    
    <?= \humhub\modules\file\widgets\UploadPreview::widget([
        'id' => 'demo-preview',
        'options' => [
            'style' => 'margin:10px'
        ]]) ?>
    
    <div id="demo-drop-zone" style="height:100px;border:1px solid #ededed">
        <h1>DropZone</h1>
    </div>
</form>

<script>
    $(document).on('humhub:ready', function() {
        var string = humhub.require('util').string;
    
        console.log(string.template('test {this.a} asdf {nnn}', {'this' : {a : 'hallo'}}));
    });
</script>

<?php 
/**
 * 
 * UploadButton::widget
 * UploadProgress::widget
 * UploadPreview::widget
 * 
 * Model attachment
 * 
 * => FilePreview with model attachment
 * 
 * use data-ui-init='[{a.b,c.d}]'
 * 
 * use templates instead of inline js
 * 
 * UploadFormField::widget => combination of all three
 */
?>