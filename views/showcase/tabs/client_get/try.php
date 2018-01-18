<?php

use humhub\widgets\Button;
use yii\helpers\Url;
?>
<div id="test-client-simple"
     data-url-html="<?= Url::to(['/devtools/client/html'])?>"
     data-url-post="<?= Url::to(['/devtools/client/post'])?>">

</div>
<?= Button::primary(Yii::t('DevtoolsModule.base', 'Load Html'))->action('demo.client.simple.loadHtml')->loader(false) ?>&nbsp;
<?= Button::primary(Yii::t('DevtoolsModule.base', 'Post Data'))->action('demo.client.simple.post')->loader(false) ?>

<script>
    humhub.module('demo.client.simple', function (module, require, $) {
        var client = require('client');
        var loader = require('ui.loader');

        var loadHtml = function() {
            var $container = $('#test-client-simple');
            loader.set($container);
            client.html($container.data('url-html')).then(function(response) {
                $container.html(response.html);
            });
        };

        var post = function() {
            var $container = $('#test-client-simple');
            loader.set($container);
            client.post($container.data('url-post'), {data: {content: Date.now()}}).then(function(response) {
                $container.html(response.result);
            });
        };

        module.export({
            loadHtml: loadHtml,
            post: post
        });
    });
</script>