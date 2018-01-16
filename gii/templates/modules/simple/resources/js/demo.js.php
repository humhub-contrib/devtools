<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?>
humhub.module('<?= $generator->moduleID ?>', function(module, require, $) {

    var init = function() {
        console.log('<?= $generator->moduleID ?> module activated');
    };

    var hello = function() {
        alert(module.text('hello')+' - '+module.config.username)
    };

    module.export({
        //uncomment the following line in order to call the init() function also for each pjax call
        //initOnPjaxLoad: true,
        init: init,
        hello: hello
    });
});