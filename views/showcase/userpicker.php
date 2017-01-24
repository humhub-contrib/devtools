<?php
$showcases = [
    [
        'id' => 'userpicker_simple',
        'title' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Simple Userpicker'),
        'description' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Create a simple <code>humhub\modules\user\widgets\UserPickerField</code>.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'controller', 'title' => Yii::t('DevtoolsModule.base', 'Model')],
        ]
    ],
    [
        'id' => 'userpicker_simple_form',
        'title' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Userpicker with ActiveForm'),
        'description' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Create a simple <code>humhub\modules\user\widgets\UserPickerField</code> with form submittion.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'controller', 'title' => Yii::t('DevtoolsModule.base', 'Controller/Model')],
        ]
    ],
    [
        'id' => 'userpicker_select_self',
        'guests' => false,
        'title' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Userpicker select current user'),
        'description' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Use the <code>user.picker.selectSelf</code> action for selecting the current user. (Only works for logged in users)'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
        ]
    ],
    [
        'id' => 'userpicker_max_users',
        'title' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Userpicker max users'),
        'description' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Limit the allowed selection count by setting the <code>maxSelection</code> option.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
        ]
    ],
    [
        'id' => 'userpicker_preselect',
        'guests' => false,
        'title' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Userpicker preselect user'),
        'description' => Yii::t('DevtoolsModule.views_showcase_userpicker', 'Learn how to preselect users by setting the <code>$selection</code> array of your Userpicker widget or populating the model attribute value.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>