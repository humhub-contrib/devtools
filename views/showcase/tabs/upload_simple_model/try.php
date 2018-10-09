<?php
 use yii\helpers\Url;
 use humhub\widgets\Button;
 use humhub\modules\devtools\models\UploadModel;
 use humhub\modules\file\widgets\Upload;
?>

<form>
    <?php $upload = Upload::forModel(new UploadModel()); ?>

    <?= $upload->button(['label' => true]); ?>

    <?= $upload->progress(); ?>

    <br>

    <?= $upload->preview(['options' => ['style' => 'margin:10px', 'class' => 'alert alert-success']]);  ?>

    <br>

    <?= Button::save(Yii::t('base', 'Submit'))->action('demo.upload.model.submit', Url::toRoute('/devtools/upload/model')); ?>
</form>

<script>
    humhub.module('demo.upload.model', function(module, require, $) {
        var client = require('client');
        module.submit = function(evt) {
            client.submit(evt).then(function(response) {
               if(response.success) {
                   module.log.success('saved');
               } else {
                   module.log.error(response.error, true);
               }
            }).catch(function(e) {
                module.log.error(e, true);
            });
        }
    });
</script>
