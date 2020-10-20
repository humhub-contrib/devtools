<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\devtools\widgets\ContentInfoStreamFilterNavigation;
use humhub\modules\stream\widgets\StreamViewer;

?>

<?= StreamViewer::widget([
    'streamAction' => '/devtools/stream/stream',
    'streamFilterNavigation' => ContentInfoStreamFilterNavigation::class,
    'messageStreamEmpty' => Yii::t('DevtoolsModule.base', 'Sees there are no entries available, create some first to see this example work!'),
])?>

