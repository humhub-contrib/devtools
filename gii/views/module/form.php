<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\devtools\widgets\IconSelect;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator yii\gii\generators\module\Generator */

?>

<?php \humhub\modules\devtools\assets\GiiAsset::register($this) ?>

<div class="module-form">
    <?= $form->field($generator, 'namespace'); ?>
    <?= $form->field($generator, 'moduleID'); ?>

    <div class="alert alert-warning">
        <?= Yii::t('DevtoolsModule.views_generators_module_form', 'Make sure your module id differs from existing or common module ids since module ids have to be unique within the application!');?>
    </div>

    <?= IconSelect::widget(['model' => $generator, 'attribute' => 'icon'])?>

    <hr>
    <?= $form->field($generator, 'isSpaceModule')->checkbox(['class' => 'isContainerModule']); ?>
    <?= $form->field($generator, 'isUserModule')->checkbox(['class' => 'isContainerModule']); ?>

    <div class="ifCotnainerModule">
        <?= $form->field($generator, 'contentContainerName'); ?>
        <?= $form->field($generator, 'contentContainerDescription'); ?>
    </div>

    <hr>

    <?= $form->field($generator, 'outputPath'); ?>
</div>

<script>
    var displayIf = function(checkBoxSelector, showClass) {
        $(checkBoxSelector).on('change', function() {
            displayCheck(checkBoxSelector, showClass);
        });
        displayCheck(checkBoxSelector, showClass)
    };

    var displayCheck = function(checkBoxSelector, showClass) {
        if(!$(checkBoxSelector+':checked').length) {
            $(showClass).hide();
        } else {
            $(showClass).show();
        }
    };


    displayIf('.isContainerModule', '.ifCotnainerModule');
    displayIf('.isAddContainerPermission', '.ifAddContainerPermission');

</script>