<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<button id="remote-loader-button" class="btn btn-default" 
        data-action-click="demo.loader.remote.send" 
        data-action-url="<?= "<?= Url::to(['/devtools/showcase/loader-remote']) ?>" ?>" 
        data-ui-loader><?= Yii::t('DevtoolsModule.views_showcases_loader_button_try', 'Send'); ?>
</button>
<span id="remote-loader-result"></span>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>