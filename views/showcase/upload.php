<?php
$showcases = [
    [
        'id' => 'simple_upload',
        'guests' => false,
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Simple File Upload'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a simple file upload component.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>