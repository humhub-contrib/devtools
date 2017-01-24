<?php

use yii\helpers\Url;
?>

<form class="form-horizontal">
    <div class="form-group">
        <label for="remote-modal-header" class="col-sm-1 control-label">
            <?= Yii::t('DevtoolsModule.views_showcase_tabs_remote_modal_try', 'Text'); ?>
        </label>
        <div class="col-sm-11">
            <input id="remote-modal-content" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_remote_modal_try', 'Change me!') ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11">
            <button class="btn btn-default" id="remote-modal-send" 
                    data-action-click="demo.modal.remote.send" 
                    data-action-url="<?= Url::to(['/devtools/showcase/load-modal']) ?>"
                    data-ui-loader>Send</button>
        </div>
    </div>
</form>

<script>
    humhub.module('demo.modal.remote', function (module, require, $) {
        var modal = require('ui.modal');

        // Export the send action
        module.send = function (event) {
            var options = {
                data: {
                    content: $('#remote-modal-content').val()
                }
            };

            // Load the result of the given action event into the global modal
            modal.global.load(event, options).then(function() {
                module.log.info('Modal has been successfully loaded!', true);
            }).catch(function(error) {
                module.log.error(error, true);
            });
        };
    });
</script>