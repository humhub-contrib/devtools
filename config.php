<?php

return [
    'id' => 'devtools',
    'class' => 'humhub\modules\devtools\Module',
    'namespace' => 'humhub\modules\devtools',
    'events' => [
        ['class' => \humhub\widgets\TopMenu::className(), 'event' => \humhub\widgets\TopMenu::EVENT_INIT, 'callback' => ['humhub\modules\devtools\Events', 'onTopMenuInit']],
    ],
];
?>