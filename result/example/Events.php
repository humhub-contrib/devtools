<?php

namespace  jharrer\humhub\modules\example;

use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => "Example",
            'icon' => '<i class="fa fa-adjust"></i>',
            'url' => Url::to(['/example/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'example' && Yii::$app->controller->id == 'index'),
        ]);
    }


    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => "Example",
            'url' => Url::to(['/example/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-adjust"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'example' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ));
    }

}

