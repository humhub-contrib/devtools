<?php

use humhub\helpers\Html;
use humhub\widgets\bootstrap\Button;

?>
<?= Button::light(Yii::t('DevtoolsModule.views_showcase_tabs_modal_confirm_try', 'Needs to be confirmed!'))
        ->id('remote-modal-send')
        ->action('demo.modal.confirm.needsConfirmation')
        ->icon('exclamation-triangle')
        ->loader(false) ?>

<script <?= Html::nonce() ?>>
    humhub.module('demo.modal.confirm', function (module, require, $) {
        var modal = require('ui.modal');
        
        module.needsConfirmation = function(evt) {
            modal.confirm().then(function($confimred) {
                if($confimred) {
                    module.log.info('Confimred!', true);
                } else {
                    module.log.info('Cancelled!', true);
                }
            });
        };
    });
</script>