<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

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
<?php humhub\modules\devtools\widgets\CodeView::end();

