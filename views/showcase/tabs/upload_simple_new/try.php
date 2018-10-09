<form>
    <?php $upload = \humhub\modules\file\widgets\Upload::withName(); ?>

    <?= $upload->button([
            'max' => 2,
            'dropZone' => '#demo-drop-zone_simple',
            'buttonOptions' => ['style' => 'position: relative;overflow: hidden;']
        ]); ?>

    <?= $upload->progress(); ?>

    <br>

    <?= $upload->preview(['options' => ['style' => 'margin:10px', 'class' => 'alert alert-success']]);  ?>

    <br>
    
    <div id="demo-drop-zone_simple" class="alert alert-info">
        <h1>DropZone</h1>
    </div>
</form>