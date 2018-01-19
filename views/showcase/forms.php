<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

$showcases = [
    [
        'id' => 'forms_simple',
        'title' => Yii::t('DevtoolsModule.views_showcase_forms', 'Simple form submission'),
        'description' => Yii::t('DevtoolsModule.views_showcase_forms', 'Learn how to submit data and load the posted data into your model.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>