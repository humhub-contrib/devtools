<?php

use humhub\widgets\Button;
use yii\helpers\Url;

\humhub\modules\devtools\assets\DevtoolsAsset::register($this);
?>
<div class="showcase-page panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('DevtoolsModule.base', '<strong>Developer</strong> Tools'); ?>
    </div>
   
    <div class="panel-body">
        <div class="clearfix">
            <?= Button::back(Url::to(['/devtools/index'])) ?>
        </div>
        <br />
        <?php foreach ($showcases as $showcase) : ?>
            <?= \humhub\modules\devtools\widgets\Showcase::widget($showcase) ?>
        <?php endforeach; ?>
    </div>
</div>

