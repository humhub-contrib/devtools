<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<!-- Form -->
<form class="form-horizontal">
    <div class="form-group">
        <label for="remote-modal-header" class="col-sm-1 control-label"><?= Yii::t('DevtoolsModule.views_showcase_tabs_remote_modal_try', 'Text'); ?></label>
        <div class="col-sm-11">
            <input id="remote-modal-content" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_remote_modal_try', 'Change me!') ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11">
            <button class="btn btn-default"  
                    data-action-click="demo.modal.remote.send" 
                    data-action-url="<?= "<?= Url::to(['/devtools/showcase/load-modal']) ?>" ?>" data-ui-loader>Send</button>
        </div>
    </div>
</form>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

// Modal view returned by server
echo \humhub\widgets\ModalDialog::widget([
    'header' => Yii::t('DevtoolsModule.views_showcase_remoteModal', '<strong>This</strong> Modal was loaded asynchronously!'),
    'body' => \yii\helpers\Html::encode($content),
    'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
]);
<?php humhub\modules\devtools\widgets\CodeView::end();