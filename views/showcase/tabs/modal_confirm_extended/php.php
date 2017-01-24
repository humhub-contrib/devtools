<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<button id="remote-modal-send" class="btn btn-default" data-action-click="demo.modal.confirm.extended.needsConfirmation">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= Yii::t('DevtoolsModule.views_showcase_tabs_modal_confirm_try', 'Needs to be confirmed!') ?>
    
</button>
<?php humhub\modules\devtools\widgets\CodeView::end();