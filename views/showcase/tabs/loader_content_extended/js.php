<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

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
<?php humhub\modules\devtools\widgets\CodeView::end();

