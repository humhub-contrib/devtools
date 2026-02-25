<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?>

use humhub\widgets\modal\ModalButton;
use humhub\widgets\form\ActiveForm;
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
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> ModalButton::save(Yii::t('base', 'Submit'))->submit(['/devtools/form']) ?>
<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> ActiveForm::end();?>

<?php humhub\modules\devtools\widgets\CodeView::end();



