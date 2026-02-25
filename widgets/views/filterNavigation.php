<?php
use humhub\components\View;
use humhub\helpers\Html;
use humhub\modules\devtools\stream\OwnContentStreamFilter;
use humhub\modules\ui\filter\widgets\CheckboxFilterInput;

/* @var $this View */
/* @var $options []  */

?>

<?= Html::beginTag('div', $options)?>

    <?= CheckboxFilterInput::widget([
        'id' => OwnContentStreamFilter::FILTER_NAME,
        'title' => Yii::t('DevtoolsModule.base','Only show my own content')
    ])?>

<?= Html::endTag('div')?>
