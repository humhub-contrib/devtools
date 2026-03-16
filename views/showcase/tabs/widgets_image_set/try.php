<?php

use humhub\widgets\ModalButton;
use yii\bootstrap\ActiveForm;
use humhub\widgets\RichtextField;
use \humhub\modules\user\widgets\UserPickerField;


if(!isset($model)) {
    $model = new \humhub\modules\devtools\models\ContainerImageSetModel;
}

/** @var $model \humhub\modules\devtools\models\ContainerImageSetModel */

?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'instance')->radioList(['user' => 'Users', 'space' => 'Spaces'], ['value' => 'user']);?>
    <?= $form->field($model, 'max')->textInput(['value' => 5])?>
    <?= $form->field($model, 'width')->textInput(['value' => 50])?>
    <?= $form->field($model, 'height')->textInput()?>
    <?= $form->field($model, 'htmlOptions')->textInput()?>
    <?= $form->field($model, 'link')->checkboxList(['Yes'])?>
    <?= $form->field($model, 'linkOptions')->textInput()?>
    <?= $form->field($model, 'tooltip')->checkboxList(['Yes'])?>
    <?= $form->field($model, 'imageOptions')->textInput()?>
    <?= $form->field($model, 'acronymCount')->textInput()?>
    <?= $form->field($model, 'hiddenImageWidth')->textInput()?>
    <?= $form->field($model, 'hiddenImageHeight')->textInput()?>

    <?= ModalButton::submitModal(['/devtools/container-image-set'], Yii::t('base', 'Submit')) ?>
<?php ActiveForm::end();?>