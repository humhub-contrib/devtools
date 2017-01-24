<?php

use yii\helpers\Url;
?>


<button class="btn btn-default" id="remote-modal-send" 
        data-action-click="ui.modal.load" 
        data-action-url="<?= Url::to(['/devtools/showcase/load-modal']) ?>"
        data-ui-loader>Send</button>
