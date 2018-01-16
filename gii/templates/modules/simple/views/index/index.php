<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\<?= $generator->getClassNamespace('assets\Assets::register($this);'); ?><?= "\n" ?>

$displayName = (Yii::$app->user->isGuest) ? <?= $generator->translate('Guest') ?> : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("<?= $generator->moduleID ?>", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => <?= $generator->translate('Hi there {name}!', false, '["name" => $displayName]') ?><?= "\n" ?>
    ]
])

<?= "?>\n"; ?>

<div class="panel-heading"><?= '<strong>'. ucfirst($generator->moduleID).'</strong> '.$generator->translate('overview', true)?></div>

<div class="panel-body">
    <p><?= $generator->translate('Hello World!', true) ?></p>

    <?=  '<?=  Button::primary('.$generator->translate('Say Hello!').')->action("'.$generator->moduleID.'.hello")->loader(false); ?>'  ?>
</div>
