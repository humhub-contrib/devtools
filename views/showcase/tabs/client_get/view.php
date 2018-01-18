<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?>

use humhub\widgets\Button;
use yii\helpers\Url;
?>
<div id="test-client-simple" data-url=" <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?>  Url::to(['/devtools/client/html'])?>"></div>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> Button::primary(Yii::t('DevtoolsModule.base', 'Load'))->action('demo.client.simple.load')->loader(false) ?>

<script>
    humhub.module('demo.client.simple', function (module, require, $) {
        var client = require('client');
        var loader = require('ui.loader');

        var load = function() {
            var $container = $('#test-client-simple');
            loader.set($container);
            client.html($container.data('url')).then(function(response) {
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
<?php humhub\modules\devtools\widgets\CodeView::end();



