<?php

namespace jharrer\humhub\modules\example;

use Yii; 
use yii\helpers\Url; 

class Module extends \humhub\components\Module
{

    /**
    * @inheritdoc
    */
    public function getConfigUrl()
    {
        return Url::to(['/example/admin']);
    }

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }

}




