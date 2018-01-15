<?php

namespace jharrer\humhub\modules\demo;

use Yii; 
use yii\helpers\Url; 
use humhub\modules\content\components\ContentContainerActiveRecord; 
use humhub\modules\space\models\Space; 

class Module extends \humhub\modules\content\components\ContentContainerModule
{
    /**
    * @inheritdoc
    */
    public function getContentContainerTypes()
    {
        return [
                Space::class,
                ];
    }

    /**
    * @inheritdoc
    */
    public function getConfigUrl()
    {
        return Url::to(['/demo/admin']);
    }

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }

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
        return Yii::t("DemoModule.base", "Demo");
    }

    /**
    * @inheritdoc
    */
    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        return Yii::t("DemoModule.base", "Short description of the modules purpose.");
    }
}




