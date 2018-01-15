<?php

return [
	'id' => 'example',
	'class' => 'jharrer\humhub\modules\example\Module',
	'namespace' => 'jharrer\humhub\modules\example',
	'events' => [
		[
			'class' => \humhub\widgets\TopMenu::class,
			'event' => \humhub\widgets\TopMenu::EVENT_INIT,
			'callback' => ['jharrer\humhub\modules\example\Events', 'onTopMenuInit'],
		],
		[
			'class' => humhub\modules\admin\widgets\AdminMenu::class,
			'event' => humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
			'callback' => ['jharrer\humhub\modules\example\Events', 'onAdminMenuInit']
		],
	],
];
?>

