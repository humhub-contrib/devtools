<?php

namespace jharrer\humhub\modules\example;

use Yii; 

class Module extends \humhub\components\Module
{

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }

}




