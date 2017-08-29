<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\widgets\Button;
use humhub\widgets\ModalButton;
use yii\helpers\Url;

?>

<?= ModalButton::defaultType(Yii::t('DevtoolsModule.views_showcase_status', 'Open Modal'))->load(Url::to(['/devtools/status/modal'])); ?>

