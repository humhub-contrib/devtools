<?php

use humhub\widgets\Button;
use humhub\widgets\ModalButton;
use humhub\modules\ui\form\widgets\ActiveForm;
use humhub\modules\content\widgets\richtext\RichTextField;
use humhub\modules\user\widgets\UserPickerField;


if(!isset($model)) {
    $model = new \humhub\modules\devtools\models\TestModel();
}

/** @var $model \humhub\modules\devtools\models\TestModel */

?>

<?php $form = ActiveForm::begin(['acknowledge' => true, 'action' => ['/devtools/form' ]]) ?>
    <?= $form->field($model, 'text') ?>
    <?= $form->field($model, 'richtext')->widget(RichTextField::class) ?>
    <?= $form->field($model, 'user')->widget(UserPickerField::class) ?>
    <?= $form->field($model, 'selection')->dropDownList($model->getOptions()) ?>
    <?= Button::save()->submit() ?>
    <?= Button::danger(Yii::t('DevtoolsModule.base', 'Reload'))->action('client.reload')->loader(false) ?>
<?php ActiveForm::end();?>