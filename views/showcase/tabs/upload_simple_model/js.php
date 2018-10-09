<?php use humhub\modules\devtools\widgets\CodeView; ?>

<?php CodeView::begin(['type' => 'js']); ?>

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

<?php humhub\modules\devtools\widgets\CodeView::end(); ?>
