<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<!-- Form -->
<form class="form-horizontal">
    <div class="mb-3 row">
        <label for="remote-modal-header" class="col-sm-1 form-label text-end pt-2"><?= Yii::t('DevtoolsModule.views_showcase_tabs_remote_modal_try', 'Text'); ?></label>
        <div class="col-sm-11">
            <input id="remote-modal-content" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_remote_modal_try', 'Change me!') ?>" />
        </div>
    </div>
    <div class="mb-3 row">
        <div class="offset-sm-1 col-sm-11">
            <button class="btn btn-light"  
                    data-action-click="demo.modal.remote.send" 
                    data-action-url="<?= "<?= Url::to(['/devtools/showcase/load-modal']) ?>" ?>" data-ui-loader>Send</button>
        </div>
    </div>
</form>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

// Modal view returned by server
echo \humhub\widgets\modal\Modal::widget([
    'title' => Yii::t('DevtoolsModule.views_showcase_remoteModal', '<strong>This</strong> Modal was loaded asynchronously!'),
    'body' => \yii\helpers\Html::encode($content),
    'footer' => \humhub\widgets\modal\ModalButton::cancel(Yii::t('base', 'Close')),
]);
<?php humhub\modules\devtools\widgets\CodeView::end();