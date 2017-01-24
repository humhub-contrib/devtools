<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>


<button class="btn btn-default" id="remote-modal-send" 
    data-action-click="ui.modal.load" 
    data-action-url="<?= "<?= Url::to(['/devtools/showcase/load-modal']) ?>" ?>"
    data-ui-loader>Send</button>

<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

// Modal view returned by server
echo \humhub\widgets\ModalDialog::widget([
    'header' => Yii::t('DevtoolsModule.views_showcase_remoteModal', '<strong>This</strong> Modal was loaded asynchronously!'),
    'body' => 'This is my remote modal body!',
    'footer' => '<button class="btn btn-default" data-modal-close>Close</button>'
]);
<?php humhub\modules\devtools\widgets\CodeView::end();