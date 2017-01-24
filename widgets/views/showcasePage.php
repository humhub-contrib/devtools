<?php
\humhub\modules\devtools\assets\DevtoolsAsset::register($this);
?>
<div class="showcase-page panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('DevtoolsModule.base', '<strong>Developer</strong> Tools'); ?>
    </div>
   
    <div class="panel-body">
        <?= \humhub\widgets\BackButton::widget(['route' => '/devtools/index', 'clearFix' => true]); ?>
        <br />
        <?php foreach ($showcases as $showcase) : ?>
            <?= \humhub\modules\devtools\widgets\Showcase::widget($showcase) ?>
        <?php endforeach; ?>
    </div>
</div>

