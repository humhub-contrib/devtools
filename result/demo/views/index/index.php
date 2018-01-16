<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\david\humhub\modules\demo\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t("DemoModule.base", "Guest") : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("demo", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t("DemoModule.base", "Hi there {name}!", ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Demo</strong> <?= Yii::t("DemoModule.base", "overview") ?></div>

<div class="panel-body">
    <p><?= Yii::t("DemoModule.base", "Hello World!") ?></p>

    <?=  Button::primary(Yii::t("DemoModule.base", "Say Hello!"))->action("demo.hello")->loader(false); ?></div>
