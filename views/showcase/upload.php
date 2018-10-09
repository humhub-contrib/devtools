<?php
if(version_compare(Yii::$app->version, '1.3.4', '<=')) {
    $showcases = [
        [
            'id' => 'upload_simple',
            'guests' => false,
            'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Simple File Upload'),
            'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a simple file upload component.'),
            'tabs' => [
                ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
                ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ]
        ],
    ];
} else {
    $showcases = [

       [
            'id' => 'upload_simple_new',
            'guests' => false,
            'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Formname Based File Upload'),
            'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a simple name based file upload component. Uploaded files will be added hidden file inputs with name <code>fileList[]</code> '),
            'tabs' => [
                ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
                ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ]
        ],
        [
            'id' => 'upload_simple_model',
            'guests' => false,
            'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Model Based File Upload with submission'),
            'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a simple model based file upload component.'),
            'tabs' => [
                ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
                ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
                ['id' => 'js', 'title' => Yii::t('DevtoolsModule.base', 'JS')],
            ]
        ],
        [
            'id' => 'upload_simple',
            'guests' => false,
            'title' => Yii::t('DevtoolsModule.views_showcase_modal', 'Simple File Upload (pre v1.3.5)'),
            'description' => Yii::t('DevtoolsModule.views_showcase_modal', 'Create a simple file upload component.'),
            'tabs' => [
                ['id' => 'try', 'active' => true, 'title' => Yii::t('DevtoolsModule.base', 'Try')],
                ['id' => 'php', 'title' => Yii::t('DevtoolsModule.base', 'PHP')],
            ]
        ],
    ];
}
?>

<?php
$msgA =  Yii::t('DevtoolsModule.base', '<strong>Note:</strong> Uploaded files have to be attached to an ActiveRecord, otherwise they will be cleaned by cronjobs.');
$msgB =  Yii::t('DevtoolsModule.base', 'The upload component will automatically add html input fields with a file guid to the surrounding form.');
$msgC = Yii::t('DevtoolsModule.base', 'Once submitted you can attach uploaded files to your model as follows:');

$info = <<<HTML
    <div class="alert alert-info">
        {$msgA}
        {$msgB}
        <br><br>
        {$msgC}
        <br><br>
        <code>\$model->fileManager->attach(Yii::\$app->request->post('fileList'));</code>
    </div>
HTML;
?>

<?= \humhub\modules\devtools\widgets\ShowcasePage::widget([
    'items' => $showcases,
    'info' => $info
])?>