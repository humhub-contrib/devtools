<?php

use \humhub\modules\devtools\widgets\ShowcasePage;

$showcases = [
    [
        'id' => 'stream_custom',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Custom Stream'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a custom stream by overwriting the dashboard stream and using a custom stream entry widget.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'controller', 'title' => Yii::t('DevtoolsModule.base', 'Controller')],
            ['id' => 'filter', 'title' => Yii::t('DevtoolsModule.base', 'Filter')],
            ['id' => 'streamEntry', 'title' => Yii::t('DevtoolsModule.base', 'StreamEntry')],
        ]
    ],
];

if (version_compare(Yii::$app->version, '1.3', '<')) {
    unset($showcases[0]); // unset first example for humhub 1.2
}

echo ShowcasePage::widget(['items' => $showcases]);
