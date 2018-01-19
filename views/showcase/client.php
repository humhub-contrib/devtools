<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

$showcases = [
    [
        'id' => 'client_get',
        'title' => Yii::t('DevtoolsModule.views_showcase_client', 'Simple client logic'),
        'description' => Yii::t('DevtoolsModule.views_showcase_client', 'Learn how to use the `client` module to receive content per javascript.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>