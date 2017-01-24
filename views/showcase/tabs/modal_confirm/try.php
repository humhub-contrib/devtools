<button class="btn btn-default" id="remote-modal-send" 
        data-action-click="demo.modal.confirm.needsConfirmation"
        data-action-block="none"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= Yii::t('DevtoolsModule.views_showcase_tabs_modal_confirm_try', 'Needs to be confirmed!') ?></button>

<script>
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