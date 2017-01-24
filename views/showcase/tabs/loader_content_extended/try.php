<div id="loader-content-container-extended" style="border:1px solid silver;margin-bottom:10px;">
    <p><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'This is my loader content.'); ?></p>
</div>
<button class="btn btn-default" id="content-loader-button-extended"><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'Start'); ?></button>
<button class="btn btn-default" id="content-loader-stop-extended"><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'Stop'); ?></button>

<script>
    humhub.module('demo.loader.content.extended', function (module, require, $) {
        var loader = require('ui.loader');

        module.init = function() {
            $('#content-loader-button-extended').on('click', function() {
                loader.set($('#loader-content-container-extended'), {
                    id: 'myId',
                    position: 'right',
                    size: '10px',
                    cssClass: 'myCustomClass',
                    wrapper: '<div style="border: 2px solid #34302D"></div>',
                    css : {
                        'background-color': '#F1F1F1'
                    },
                    itemCss: {
                        padding:'0px',
                        'background-color': '#34302D'
                    }
                });
            });
            
            $('#content-loader-stop-extended').on('click', function() {
               loader.reset($('#loader-content-container-extended')); 
            });
        };
    });
</script>