<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<button class="btn btn-default" id="remote-modal-send" 
        data-action-click="demo.modal.confirm.needsConfirmation"
        data-action-block="none"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= Yii::t('DevtoolsModule.views_showcase_tabs_modal_confirm_try', 'Needs to be confirmed!') ?></button>
<?php humhub\modules\devtools\widgets\CodeView::end();