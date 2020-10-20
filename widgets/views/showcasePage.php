<?php

use humhub\modules\devtools\assets\DevtoolsAsset;
use humhub\modules\devtools\widgets\Showcase;
use humhub\widgets\Button;
use yii\helpers\Url;

DevtoolsAsset::register($this);

/* @var $showcase array */
/* @var $info string */
?>
<div class="showcase-page panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('DevtoolsModule.base', '<strong>Developer</strong> Tools'); ?>
    </div>

    <div class="panel-body">
        <div class="clearfix">
            <?= Button::back(Url::to(['/devtools/index'])) ?>
        </div>

        <?= $info ?>

        <br/>
        <?php foreach ($showcases as $showcase): ?>
            <?= Showcase::widget($showcase) ?>
        <?php endforeach; ?>
    </div>
</div>
