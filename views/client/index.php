<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

/* @var $this \humhub\components\View */
?>

<div class="alert alert-info">
    <?= Yii::t('DevtoolsModule.views_client_index', 'This is our server response at: {ts}', ['ts' => time()] ) ?>

    <?php if($post) : ?>
        <br /><br />
        <?= Yii::t('DevtoolsModule.views_client_index', 'Posted Data: {content}', ['content' => $post] ) ?>
    <?php endif; ?>
</div>
