<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

humhub.module('demo.loader.simple', function (module, require, $) {
    var loader = require('ui.loader');

    module.init = function() {
        $('#simple-loader-stop').on('click', function() {
           loader.reset('#simple-loader-button'); 
        });
    };
});
<?php humhub\modules\devtools\widgets\CodeView::end();

