<?php

use humhub\widgets\ModalButton;
use yii\bootstrap\ActiveForm;
use humhub\widgets\RichtextField;
use \humhub\modules\user\widgets\UserPickerField;


if(!isset($model)) {
    $model = new \humhub\modules\devtools\models\TestModel();
}

/** @var $model \humhub\modules\devtools\models\TestModel */

?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'text');?>
    <?= $form->field($model, 'richtext')->widget(RichtextField::class);?>
    <?= $form->field($model, 'user')->widget(UserPickerField::class);?>
    <?= $form->field($model, 'selection')->dropDownList($model->getOptions());?>
    <?= ModalButton::submitModal(['/devtools/form'],Yii::t('base', 'Submit')) ?>
<?php ActiveForm::end();?>