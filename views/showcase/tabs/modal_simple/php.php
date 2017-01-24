<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'html']); ?>

<form class="form-horizontal">
    <div class="form-group">
        <label for="simple-modal-header" class="col-sm-1 control-label"><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Header'); ?></label>
        <div class="col-sm-11">
            <input id="simple-modal-header" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', '<strong>My</strong> Modal Header') ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="simple-modal-body" class="col-sm-1 control-label"><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Body'); ?></label>
        <div class="col-sm-11">
            <input id="simple-modal-body" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'My Modal Body'); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="simple-modal-footer" class="col-sm-1 control-label"><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Footer'); ?></label>
        <div class="col-sm-11">
            <input id="simple-modal-footer" type="text" class="form-control" value="<button class='btn btn-default' data-modal-close><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Close'); ?></button>" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="checkbox">
                <label><input type="checkbox" checked="checked" id="simple-modal-backdrop"><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Closable by backdrop click and keyboard'); ?></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11">
            <button class="btn btn-default" id="simple-modal-open">Open</button>
        </div>
    </div>
</form>
<?php humhub\modules\devtools\widgets\CodeView::end();