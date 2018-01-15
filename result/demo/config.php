<?php

return [
	'id' => 'demo',
	'class' => 'jharrer\humhub\modules\demo\Module',
	'namespace' => 'jharrer\humhub\modules\demo',
	'events' => [
		[
			'class' => \humhub\widgets\TopMenu::class,
			'event' => \humhub\widgets\TopMenu::EVENT_INIT,
			'callback' => ['jharrer\humhub\modules\demo\Events', 'onTopMenuInit'],
		],
		[
			'class' => humhub\modules\admin\widgets\AdminMenu::class,
			'event' => humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
			'callback' => ['jharrer\humhub\modules\demo\Events', 'onAdminMenuInit']
		],
	],
];
?>

