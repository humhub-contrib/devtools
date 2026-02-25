<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\devtools\models\forms\RichtextModel;
use humhub\widgets\modal\ModalButton;
use humhub\widgets\form\ActiveForm;
use yii\helpers\Url;

/* @var $this \humhub\components\View */
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field(new RichtextModel(), 'richtext')->widget(\humhub\modules\content\widgets\richtext\RichTextField::class, [
        'id' => 'markdown_exclude',
        'exclude' => ['emoji', 'mention', 'table']
    ]) ?>

<br>

<?= ModalButton::save(Yii::t('DevtoolsModule.base', 'Submit'))->submit(Url::to(['/devtools/richtext/exclude'])) ?>

<?php ActiveForm::end() ?>
