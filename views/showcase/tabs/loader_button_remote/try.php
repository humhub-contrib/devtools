<?php

use humhub\helpers\Html;
use yii\helpers\Url;

?>

<button id="remote-loader-button" class="btn btn-light" 
        data-action-click="demo.loader.remote.send" 
        data-action-url="<?= Url::to(['/devtools/showcase/loader-remote']) ?>"
        data-ui-loader>
            <?= Yii::t('DevtoolsModule.views_showcases_loader_button_try', 'Send'); ?>
</button>
<span id="remote-loader-result"></span>

<script <?= Html::nonce() ?>>
    humhub.module('demo.loader.remote', function (module, require, $) {
        var client = require('client');

        module.send = function(evt) {
            client.get(evt).then(function(response) {
                $('#remote-loader-result').html(response.output);
            }).catch(function(err) {
                module.log.error(err, true);
            });
        };
    });
</script>