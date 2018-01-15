<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

$showcases = [
    [
        'id' => 'richtext_simple',
        'title' => Yii::t('DevtoolsModule.views_showcase_richtext', 'Simple Richtext Example'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Use of a simple richtext input field.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
    [
        'id' => 'richtext_exclude',
        'title' => Yii::t('DevtoolsModule.views_showcase_richtext', 'Richtext Exclude Plugins'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Exclude `emoji`, `mention` and `table` plugin from the (default) full preset.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
    [
        'id' => 'richtext_preset',
        'title' => Yii::t('DevtoolsModule.views_showcase_richtext', 'Richtext Preset'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Use of the markdown richtext presets, to prevent extended richtext features as metioning, emojis etc.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
    [
        'id' => 'richtext_custom_preset',
        'title' => Yii::t('DevtoolsModule.views_showcase_richtext', 'Custom Richtext Preset'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a custom preset with a custom plugin and excluded emoji plugin.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>