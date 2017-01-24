<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

    humhub.module('demo.loader.remote', function (module, require, $) {
        var client = require('client');

        module.send = function(evt) {
            // The client module will automatically remove the loader animation after completing the request.
            client.get(evt).then(function(response) {
                $('#remote-loader-result').html(response.output);
            }).catch(function(err) {
                module.log.error(err, true);
            });
        };
    });
<?php humhub\modules\devtools\widgets\CodeView::end();

