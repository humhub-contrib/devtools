<?php

use humhub\widgets\Button;

?>

<?= Button::success(Yii::t('DevtoolsModule.views_showcase_status', 'Success'))->action('demo.status.simple.success')->loader(false) ?>

<?= Button::info(Yii::t('DevtoolsModule.views_showcase_status', 'Info'))->action('demo.status.simple.info')->loader(false) ?>

<?= Button::warning(Yii::t('DevtoolsModule.views_showcase_status', 'Warning'))->action('demo.status.simple.warn')->loader(false) ?>

<?= Button::danger(Yii::t('DevtoolsModule.views_showcase_status', 'Error'))->action('demo.status.simple.error')->loader(false) ?>

<script>
    humhub.module('demo.status.simple', function (module, require, $) {
        var status = require('ui.status');

        module.export({
            success: function (evt) {
                status.success(evt.$trigger.text());
            },
            error: function (evt) {
                status.error(evt.$trigger.text());
            },
            info: function (evt) {
                status.info(evt.$trigger.text());
            },
            warn: function (evt) {
                status.warn(evt.$trigger.text());
            }
        });
    });
</script>