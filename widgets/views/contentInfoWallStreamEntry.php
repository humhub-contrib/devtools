<?php
use humhub\libs\Html;
use humhub\modules\content\components\ContentActiveRecord;
use humhub\modules\content\widgets\VisibilityIcon;

/* @var $model ContentActiveRecord */
?>
<div style="border:1px solid var(--info);margin:10px;padding:10px;">
    <b>Content id:</b> <?= $model->content->id ?><br>
    <b>Content name:</b> <?= $model->getContentName() ?> <?= VisibilityIcon::getByModel($model) ?><br>
    <b>Created at:</b> <?=  Yii::$app->formatter->asDatetime($model->content->created_at) ?><br>
    <b>Created by:</b> <?=  Html::containerLink($model->content->createdBy) ?><br>
    <?php if($model->content->isUpdated()) :?>
        <b>Last updated at:</b> <?=  Yii::$app->formatter->asDatetime($model->content->updated_at) ?><br>
        <b>Updated by:</b> <?=  Html::containerLink($model->content->updatedBy) ?><br>
    <?php endif; ?>
    <b>Container:</b> <?=  Html::containerLink($model->content->container) ?><br>
</div>
