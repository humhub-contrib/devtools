<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<?=

<<<HTML

<?php
use humhub\modules\devtools\widgets\ContentInfoStreamFilterNavigation;
use humhub\modules\stream\widgets\StreamViewer;

?>

<?= StreamViewer::widget([
    'streamAction' => '/devtools/stream/stream',
    'streamFilterNavigation' => ContentInfoStreamFilterNavigation::class,
    'messageStreamEmpty' => Yii::t('DevtoolsModule.base', 'Sees there are no entries available, create some first to see this example work!'),
])?>
HTML;

?>

<?php humhub\modules\devtools\widgets\CodeView::end();