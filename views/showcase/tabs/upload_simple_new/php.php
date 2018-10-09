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