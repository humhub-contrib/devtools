<?php

return [
	'id' => 'demo',
	'class' => 'david\humhub\modules\demo\Module',
	'namespace' => 'david\humhub\modules\demo',
	'events' => [
		[
			'class' => \humhub\widgets\TopMenu::class,
			'event' => \humhub\widgets\TopMenu::EVENT_INIT,
			'callback' => ['david\humhub\modules\demo\Events', 'onTopMenuInit'],
		],
		[
			'class' => humhub\modules\admin\widgets\AdminMenu::class,
			'event' => humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
			'callback' => ['david\humhub\modules\demo\Events', 'onAdminMenuInit']
		],
	],
];
?>

