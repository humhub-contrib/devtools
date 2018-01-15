<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

namespace  <?= $generator->getClassNamespace(); ?>;

use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => "<?= ucfirst($generator->moduleID); ?>",
            'icon' => '<i class="fa <?= $generator->icon ?>"></i>',
            'url' => Url::to(['/<?= $generator->moduleID; ?>/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == '<?= $generator->moduleID; ?>' && Yii::$app->controller->id == 'index'),
        ]);
    }


    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => "<?= ucfirst($generator->moduleID); ?>",
            'url' => Url::to(['/<?= $generator->moduleID; ?>/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa <?= $generator->icon ?>"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == '<?= $generator->moduleID; ?>' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ));
    }

}

