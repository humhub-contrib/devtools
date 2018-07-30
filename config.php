<?php

use humhub\modules\devtools\Events;
use humhub\widgets\TopMenu;

return [
    'id' => 'devtools',
    'class' => 'humhub\modules\devtools\Module',
    'namespace' => 'humhub\modules\devtools',
    'events' => [
        ['class' => TopMenu::class, 'event' => TopMenu::EVENT_INIT, 'callback' => [Events::class, 'onTopMenuInit']],
    ],
];
