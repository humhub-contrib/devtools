<?php

use humhub\components\console\Application;
use humhub\modules\devtools\Events;
use humhub\widgets\TopMenu;

/** @noinspection MissedFieldInspection */
return [
    'id' => 'devtools',
    'class' => 'humhub\modules\devtools\Module',
    'namespace' => 'humhub\modules\devtools',
    'events' => [
        [TopMenu::class, TopMenu::EVENT_INIT, [Events::class, 'onTopMenuInit']],
        [Application::class, Application::EVENT_ON_INIT, [Events::class, 'onConsoleApplicationInit']],
    ],
];
