<?php

namespace  david\humhub\modules\demo;

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
            'label' => "Demo",
            'icon' => '<i class="fa fa-diamond"></i>',
            'url' => Url::to(['/demo/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'demo' && Yii::$app->controller->id == 'index'),
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
            'label' => "Demo",
            'url' => Url::to(['/demo/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-diamond"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'demo' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ));
    }

}

