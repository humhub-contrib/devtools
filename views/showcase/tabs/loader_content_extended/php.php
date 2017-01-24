<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<div id="loader-content-container-extended" style="border:1px solid silver;margin-bottom:10px;">
    <p><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'This is my loader content.'); ?></p>
</div>
<button class="btn btn-default" id="content-loader-button-extended"><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'Start'); ?></button>
<button class="btn btn-default" id="content-loader-stop-extended"><?= Yii::t('DevtoolsModule.views_showcases_loader_content_try', 'Stop'); ?></button>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>