<div id="loader-content-container" style="border:1px solid silver;margin-bottom:10px;">
    <p><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'This is my loader content.'); ?></p>
</div>
<button class="btn btn-default" id="content-loader-button"><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'Start'); ?></button>
<button class="btn btn-default" id="content-loader-stop"><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'Stop'); ?></button>

<script>
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
</script>