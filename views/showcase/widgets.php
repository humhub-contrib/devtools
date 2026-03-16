<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

$showcases = [
    [
        'id' => 'widgets_image_set',
        'title' => Yii::t('DevtoolsModule.views_showcase_widgets', 'Container image set'),
        'description' => Yii::t('DevtoolsModule.views_showcase_widgets', 'Learn how to include container image set into your page.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>