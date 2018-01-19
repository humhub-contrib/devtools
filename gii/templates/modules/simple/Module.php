<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

namespace <?= $generator->getClassNamespace(); ?>;

<?php foreach($generator->moduleClass->getIncludes() as $ns) :?>
use <?= $ns ?>; <?= "\r\n" ?>
<?php endforeach; ?>

class Module extends <?= $generator->moduleClass->getSuperClass() ?><?= "\r\n" ?>{
<?php if($generator->isContentContainerModule()) : ?>
    /**
    * @inheritdoc
    */
    public function getContentContainerTypes()
    {
        return [
<?php if($generator->isSpaceModule) : ?>
            Space::class,
<?php endif; ?>
<?php if($generator->isUserModule) : ?>
            User::class
<?php endif; ?>
        ];
    }
<?php endif; ?>

    /**
    * @inheritdoc
    */
    public function getConfigUrl()
    {
        return Url::to(['/<?= $generator->moduleID ?>/admin']);
    }

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }

<?php if($generator->isContentContainerModule()) : ?>
    /**
    * @inheritdoc
    */
    public function disableContentContainer(ContentContainerActiveRecord $container)
    {
        // Clean up space related data, don't remove the parent::disable()!!!
        parent::disable();
    }

    /**
    * @inheritdoc
    */
    public function getContentContainerName(ContentContainerActiveRecord $container)
    {
        return <?= $generator->translate($generator->contentContainerName)."\n" ?>;
    }

    /**
    * @inheritdoc
    */
    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        return <?= $generator->translate($generator->contentContainerDescription)."\n"?>;
    }
<?php endif; ?>
}




