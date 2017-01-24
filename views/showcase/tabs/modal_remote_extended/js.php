<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

humhub.module('demo.modal.remote', function (module, require, $) {
    var modal = require('ui.modal');

    // Export the send action
    module.send = function (event) {
        var options = {
            data: {
                content: $('#remote-modal-content').val()
            }
        };

        // Load the result of the given action event into the global modal
        modal.global.load(event, options).then(function() {
            module.log.info('Modal has been successfully loaded!', true);
        }).catch(function(error) {
            module.log.error(error, true);
        });
    };
});
<?php humhub\modules\devtools\widgets\CodeView::end();

