<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'javascript']); ?>

$('#simple-modal-open').on('click', function (evt) {
    evt.preventDefault();

    // This will create a new modal with the id #simpleModal. After creating the modal it can be reused.
    humhub.modules.ui.modal.get('simpleModal', {
        'header': $('#simple-modal-header').val(),
        'body': $('#simple-modal-body').val(),
        'footer': $('#simple-modal-footer').val(),
        'backdrop': $('#simple-modal-backdrop').is(':checked'),
        'keyboard': $('#simple-modal-backdrop').is(':checked')
    }).show();
});
<?php humhub\modules\devtools\widgets\CodeView::end();

