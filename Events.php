<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools;

use humhub\helpers\ControllerHelper;
use humhub\modules\ui\menu\MenuLink;
use humhub\widgets\TopMenu;
use Yii;

class Events
{
    public static function onTopMenuInit($event)
    {
        if (Yii::$app->user->isGuest) {
            return true;
        }

        /* @var TopMenu $menu */
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => Yii::t('DevtoolsModule.base', 'Devtools'),
            'id' => 'devtools',
            'icon' => 'code',
            'url' => ['/devtools/index'],
            'sortOrder' => 100,
            'isActive' => ControllerHelper::isActivePath('devtools'),
        ]));
    }

    public static function onConsoleApplicationInit($event)
    {
        $application = $event->sender;
        $application->controllerMap['dummy'] = commands\DummyController::class;
    }
}
