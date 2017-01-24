<?php
$showcases = [
    [
        'id' => 'loader_button',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Simple Loader Button'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a loader button by using the <code>data-ui-loader</code> addition.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'loader_button_remote',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Loader Button with Action Event'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a loader button bound to a client action. The loader will be removed after the ajax call completes.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'loader_content',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Add the loader to a div'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Use the <code>ui.loader</code> module to set a loader animation over and div.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'loader_content_extended',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Customize your loader animation'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Use options to customize your loader animation over and div.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>