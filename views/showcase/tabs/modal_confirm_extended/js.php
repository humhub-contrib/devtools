<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

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
<?php humhub\modules\devtools\widgets\CodeView::end();

