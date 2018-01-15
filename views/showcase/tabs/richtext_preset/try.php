<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\devtools\models\forms\RichtextModel;
use humhub\widgets\Button;
use humhub\widgets\ModalButton;
use humhub\widgets\RichtextField;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this \humhub\components\View */
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field(new RichtextModel(), 'richtext')->widget(RichtextField::class, [
        'id' => 'markdown_richtext',
        'preset' => 'markdown'
]) ?>

<br>

<?= ModalButton::submitModal(Url::to(['/devtools/richtext/preset']),  Yii::t('DevtoolsModule.base', 'Submit')) ?>

<?php ActiveForm::end() ?>
