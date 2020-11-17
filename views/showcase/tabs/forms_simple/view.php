<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?>

use humhub\widgets\ModalButton;
use humhub\modules\ui\form\widgets\ActiveForm;
use humhub\modules\content\widgets\richtext\RichTextField;
use \humhub\modules\user\widgets\UserPickerField;

if(!isset($model)) {
    $model = new \humhub\modules\devtools\models\TestModel();
}

/** @var $model \humhub\modules\devtools\models\TestModel */

?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> $form = ActiveForm::begin();?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> $form->field($model, 'text');?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> $form->field($model, 'richtext')->widget(RichTextField::class);?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> $form->field($model, 'user')->widget(UserPickerField::class);?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> $form->field($model, 'selection')->dropDownList($model->getOptions());?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> ModalButton::submitModal(['/devtools/form'],Yii::t('base', 'Submit')) ?>
<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> ActiveForm::end();?>

<?php humhub\modules\devtools\widgets\CodeView::end();



