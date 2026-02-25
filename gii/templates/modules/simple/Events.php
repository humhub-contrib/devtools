<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

namespace <?= $generator->getClassNamespace() ?>;

use humhub\helpers\ControllerHelper;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\ui\menu\MenuLink;
use humhub\widgets\TopMenu;
use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        /* @var TopMenu $menu */
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => '<?= ucfirst((string) $generator->moduleID) ?>',
            'icon' => '<?= $generator->icon ?>',
            'url' => ['/<?= $generator->moduleID ?>/index'],
            'sortOrder' => 99999,
            'isActive' => ControllerHelper::isActivePath('<?= $generator->moduleID ?>', 'index'),
        ]));
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        /* @var AdminMenu $menu */
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => '<?= ucfirst((string) $generator->moduleID) ?>',
            'url' => ['/<?= $generator->moduleID; ?>/admin'],
            'icon' => '<?= $generator->icon ?>',
            'isActive' => ControllerHelper::isActivePath('<?= $generator->moduleID ?>', 'admin'),
            'sortOrder' => 99999,
        ]));
    }
}
