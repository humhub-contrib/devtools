<?php

use humhub\helpers\Html;
use humhub\widgets\bootstrap\Button;

?>
<?= Button::light(Yii::t('DevtoolsModule.views_showcase_tabs_modal_confirm_try', 'Needs to be confirmed!'))
    ->id('remote-modal-send')
    ->action('demo.modal.confirm.extended.needsConfirmation')
    ->icon('exclamation-triangle')
    ->loader(false) ?>

<script <?= Html::nonce() ?>>
    humhub.module('demo.modal.confirm.extended', function (module, require, $) {
        var modal = require('ui.modal');
        
        module.needsConfirmation = function(evt) {
            var options = {
                header: '<strong>Confirm</strong> custom action?',
                body: 'Do you really want to execute this custom action?',
                confirmText: 'Do it!',
                cancelText: 'Never Mind...',        
            }
    
            modal.confirm(options).then(function($confimred) {
                if($confimred) {
                    module.log.info('Did it!', true);
                } else {
                    module.log.info('Cancelled!', true);
                }
            });
        };
    });
</script>