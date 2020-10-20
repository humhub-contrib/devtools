<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

$showcases = [
    [
        'id' => 'menu_simple',
        'title' => Yii::t('DevtoolsModule.views_showcase_menu', 'Simple custom menu'),
        'description' => Yii::t('DevtoolsModule.views_showcase_menus', 'Learn how to implement a custom and extendable menu widget.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>