<?php
\humhub\modules\devtools\assets\DevtoolsAsset::register($this);
?>
<div id="<?= $id ?>" class="showcase panel panel-default">

    <div class="devpanel-head <?= $disabled ? 'disabled' : '' ?>">
        
        <?php if (!$disabled) : ?>
            <h1><i class="fa fa-chevron-circle-right"></i><?= $title ?></h1>
        <?php else: ?>
            <h1><i class="fa fa-warning"></i><?= $title ?></h1>
            <span><?= Yii::t('DevtoolsModule.widgets_views_showcase', 'This showcase is only accessible for logged in users!'); ?></span>
        <?php endif; ?>
    </div>

    <?php if (!$disabled) : ?>
        <div class="devpanel-body" style="display:none;">
            <div class="panel-body">
                <p><?= $description ?></p>
            </div>
            <ul class="nav nav-tabs tab-sub-menu" role="tablist">
                <?php foreach ($tabs as $tab) : ?>
                    <li role="presentation" class="<?= isset($tab['active']) && $tab['active'] ? 'active' : '' ?>">
                        <a href="#<?= $id . '_' . $tab['id'] ?>" aria-controls="home" role="tab" data-toggle="tab"><?= $tab['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="panel-body tab">
                <div class="tab-content">
                    <?php foreach ($tabs as $tab) : ?>
                        <div role="tabpanel" class="tab-pane <?= isset($tab['active']) && $tab['active'] ? 'active' : '' ?>" id="<?= $id . '_' . $tab['id'] ?>">
                            <?= \humhub\modules\devtools\widgets\ShowcaseTabContent::widget(['id' => $id, 'tab' => $tab]); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

