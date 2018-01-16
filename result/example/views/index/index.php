<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\jharrer\humhub\modules\example\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t("ExampleModule.base", "Guest") : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("example", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t("ExampleModule.base", "Hi there {name}!", ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Example</strong> <?= Yii::t("ExampleModule.base", "overview") ?></div>

<div class="panel-body">
    <p><?= Yii::t("ExampleModule.base", "Hello World!") ?></p>

    <?=  Button::primary(Yii::t("ExampleModule.base", "Say Hello!"))->action("example.hello")->loader(false); ?>
</div>
