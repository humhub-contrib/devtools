<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

humhub.module('demo.status.simple', function (module, require, $) {
    var status = require('ui.status');

    module.export({
        success: function (evt) {
            status.success(evt.$trigger.text());
        },
        error: function (evt) {
            status.error(evt.$trigger.text());
        },
        info: function (evt) {
            status.info(evt.$trigger.text());
        },
        warn: function (evt) {
            status.warn(evt.$trigger.text());
        }
    });
});

<?php humhub\modules\devtools\widgets\CodeView::end();




