<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<div id="loader-content-container" style="border:1px solid silver;margin-bottom:10px;">
    <p>This is my loader content.</p>
</div>
<button class="btn btn-default" id="content-loader-button"><?= Yii::t('DevtoolsModule.views_showcases_loader_button_try', 'Start'); ?></button>
<button class="btn btn-default" id="content-loader-stop">Stop</button>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>