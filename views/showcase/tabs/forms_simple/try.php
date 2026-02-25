<?php

use humhub\widgets\form\ActiveForm;
use humhub\modules\content\widgets\richtext\RichTextField;
use humhub\modules\user\widgets\UserPickerField;
use humhub\widgets\modal\ModalButton;

if (!isset($model)) {
    $model = new \humhub\modules\devtools\models\TestModel();
}

/** @var $model \humhub\modules\devtools\models\TestModel */

?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'text');?>
    <?= $form->field($model, 'richtext')->widget(RichTextField::class);?>
    <?= $form->field($model, 'user')->widget(UserPickerField::class);?>
    <?= $form->field($model, 'selection')->dropDownList($model->getOptions());?>
    <?= ModalButton::save(Yii::t('base', 'Submit'))->submit(['/devtools/form']) ?>
<?php ActiveForm::end();?>