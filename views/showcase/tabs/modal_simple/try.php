<?php

use humhub\helpers\Html;

?>
<form class="form-horizontal">
    <div class="mb-3 row">
        <label for="simple-modal-header" class="col-sm-1 form-label text-end pt-2">
            <?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Header'); ?>
        </label>
        <div class="col-sm-11">
            <input id="simple-modal-header" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', '<strong>My</strong> Modal Header') ?>" />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="simple-modal-body" class="col-sm-1 form-label text-end pt-2">
            <?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Body'); ?>
        </label>
        <div class="col-sm-11">
            <input id="simple-modal-body" type="text" class="form-control" value="<?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'My Modal Body'); ?>" />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="simple-modal-footer" class="col-sm-1 form-label text-end pt-2">
            <?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Footer'); ?>
        </label>
        <div class="col-sm-11">
            <input id="simple-modal-footer" type="text" class="form-control" value="<button class='btn btn-light' data-bs-dismiss='modal'><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Close'); ?></button>" />
        </div>
    </div>
    <div class="mb-3 row">
        <div class="offset-sm-1 col-sm-11">
            <div class="form-check">
                <input type="checkbox" checked="checked" id="simple-modal-backdrop" class="form-check-input">
                <label class="form-check-label">
                    <?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'Closable by backdrop click and keyboard'); ?>
                </label>
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="offset-sm-1 col-sm-11">
            <button class="btn btn-light" id="simple-modal-open"><?= Yii::t('DevtoolsModule.views_showcase_tabs_simple_modal_try', 'open'); ?></button>
        </div>
    </div>
</form>

<script <?= Html::nonce() ?>>
    $('#simple-modal-open').on('click', function (evt) {
        evt.preventDefault();

        humhub.modules.ui.modal.get('simpleModal', {
            'header': $('#simple-modal-header').val(),
            'body': $('#simple-modal-body').val(),
            'footer': $('#simple-modal-footer').val(),
            'backdrop': $('#simple-modal-backdrop').is(':checked'),
            'keyboard': $('#simple-modal-backdrop').is(':checked')
        }).show();
    });
</script>