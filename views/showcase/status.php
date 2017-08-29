<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

$showcases = [
    [
        'id' => 'status_simple',
        'title' => Yii::t('DevtoolsModule.views_showcase_status', 'Simple Status Message'),
        'description' => Yii::t('DevtoolsModule.views_showcase_status', 'Trigger status messges by javascript.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
        ]
    ],
    [
        'id' => 'status_view',
        'title' => Yii::t('DevtoolsModule.views_showcase_status', 'View Status Message'),
        'description' => Yii::t('DevtoolsModule.views_showcase_status', 'Trigger status messges within view.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
    [
        'id' => 'status_modal',
        'title' => Yii::t('DevtoolsModule.views_showcase_status', 'ModalClose with status message'),
        'description' => Yii::t('DevtoolsModule.views_showcase_status', 'Close modal and show status message. This can be used for form submissions.'),
        'tabs' => [
            ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
            ['id' => 'view', 'title' => Yii::t('DevtoolsModule.base', 'View')],
            ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
        ]
    ],
];
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget(['items' => $showcases])?>