<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?>

use \humhub\modules\ui\widgets\ContainerImageSet;

/** @var $items \humhub\modules\user\models\User || \humhub\modules\user\models\Space */

?>

<?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> ContainerImageSet::widget([
        'items' => $items,
        'max' => 2, //Default 5
        'width' => 50, // Default 50
        'height' => null, // Default null
        'htmlOptions' => [],
        'link' => true, // Default false
        'linkOptions' => ['class' => 'pull-left'], //Default []
        'showTooltip' => true, // Default false
        'imageOptions' => ['class' => 'img-rounded tt img_margin'], //Default []
        'hiddenImageWidth' => 25, // Default 50
        'hiddenImageWidth' => null // Default null
        ]);
    ?>

<?php humhub\modules\devtools\widgets\CodeView::end();