<?php

use \humhub\modules\devtools\widgets\ShowcasePage;

$showcases = [
    [
        'id' => 'modal_simple',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Simple Modal'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a simple Modal by using the <code>humhub.modules.ui.modal</code> Javascript Module.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'modal_simple_remote',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Simple Remote Modal'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Load a Modal from the backend by using the <code>humhub.modules.ui.modal.load</code> action.<br /> <b>Note:</b> the backend should only return the dialog part of the modal.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'modal_remote_extended',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Remote Modal Extended'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Load a Modal from the backend using a custom action.<br /> <b>Note:</b> the backend should only return the dialog part of the modal.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'modal_confirm',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Confirm Modal'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Use a Modal for confirming your actions.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'modal_confirm_extended',
        'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Confirm Modal Customized'),
        'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Customize your confirmation modal.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ]
];

if (version_compare(Yii::$app->version, '1.3', '<')) {
    unset($showcases[0]); // unset first example for humhub 1.2
}

echo ShowcasePage::widget(['items' => $showcases]);
