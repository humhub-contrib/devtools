<?php

use humhub\helpers\Html;

?>
<button class="btn btn-light" id="simple-loader-button" data-ui-loader><?= Yii::t('DevtoolsModule.views_showcases_loader_button_try', 'Start'); ?></button>
<button class="btn btn-light" id="simple-loader-stop">Stop</button>

<script <?= Html::nonce() ?>>
    humhub.module('demo.loader.simple', function (module, require, $) {
        var loader = require('ui.loader');

        module.init = function() {
            $('#simple-loader-stop').on('click', function() {
               loader.reset('#simple-loader-button'); 
            });
        };
    });
</script>