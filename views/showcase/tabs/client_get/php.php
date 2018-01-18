Controller:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

public function actionHtml()
{
    return $this->renderAjax('index', [
        'post' => null
    ]);
}

public function actionPost()
{
    $this->forcePostRequest();
        return $this->asJson(['result' => $this->renderAjax('index', ['post' => Yii::$app->request->post('content')])
    ]);
}
<?php humhub\modules\devtools\widgets\CodeView::end();?>


View:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

<div class="alert alert-info">
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> Yii::t('DevtoolsModule.views_client_index', 'This is our server response at: {ts}', ['ts' => time()] ) ?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> if($post) : ?>
        <br /><br />
        <?= \humhub\modules\devtools\widgets\CodeView::PHP_START_ECHO ?> Yii::t('DevtoolsModule.views_client_index', 'Posted Data: {content}', ['content' => $post] ) ?>
    <?= \humhub\modules\devtools\widgets\CodeView::PHP_START ?> endif; ?>
</div>
<?php humhub\modules\devtools\widgets\CodeView::end();
