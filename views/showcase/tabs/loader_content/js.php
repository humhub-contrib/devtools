<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

humhub.module('demo.loader.content', function (module, require, $) {
    var loader = require('ui.loader');

    module.init = function() {
        $('#content-loader-button').on('click', function() {
            loader.set('#loader-content-container');
        });
        $('#content-loader-stop').on('click', function() {
           loader.reset('#loader-content-container'); 
        });
    };
});
<?php humhub\modules\devtools\widgets\CodeView::end();

