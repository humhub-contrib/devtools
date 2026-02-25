<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\content\widgets\richtext\RichTextField;
use humhub\modules\devtools\models\forms\RichtextModel;
use humhub\widgets\form\ActiveForm;
use humhub\widgets\modal\ModalButton;
use yii\helpers\Url;

/* @var $this \humhub\components\View */
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field(new RichtextModel(), 'richtext')->widget(RichTextField::class, [
        'id' => 'markdown_richtext',
        'preset' => 'markdown'
    ]) ?>

<br>

<?= ModalButton::save(Yii::t('DevtoolsModule.base', 'Submit'))->submit(Url::to(['/devtools/richtext/preset'])) ?>

<?php ActiveForm::end() ?>
