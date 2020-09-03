<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\devtools\models\forms\RichtextModel;
use humhub\widgets\Button;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this \humhub\modules\ui\view\components\View */
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field(new RichtextModel(), 'richtext')->widget(\humhub\modules\content\widgets\richtext\RichTextField::class) ?>

<br>

<?= \humhub\widgets\ModalButton::submitModal(Url::to(['/devtools/richtext/modal']),  Yii::t('DevtoolsModule.base', 'Submit')) ?>

<?php ActiveForm::end() ?>
