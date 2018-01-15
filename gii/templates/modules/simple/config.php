<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

return [
	'id' => '<?= $generator->moduleID; ?>',
	'class' => '<?= $generator->moduleClass->getNameSpace(); ?>',
	'namespace' => '<?= $generator->getClassNamespace(); ?>',
	'events' => [
		[
			'class' => \humhub\widgets\TopMenu::class,
			'event' => \humhub\widgets\TopMenu::EVENT_INIT,
			'callback' => ['<?= $generator->getClassNamespace('Events'); ?>', 'onTopMenuInit'],
		],
		[
			'class' => humhub\modules\admin\widgets\AdminMenu::class,
			'event' => humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
			'callback' => ['<?= $generator->getClassNamespace('Events'); ?>', 'onAdminMenuInit']
		],
	],
];
?>

