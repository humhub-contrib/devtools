<button class="btn btn-default" id="remote-modal-send" 
        data-action-click="demo.modal.confirm.extended.needsConfirmation"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= Yii::t('DevtoolsModule.views_showcase_tabs_modal_confirm_try', 'Needs to be confirmed!') ?></button>

<script>
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