<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\gii\generators;


use yii\base\Object;

class ModuleClassHelper extends Object
{
    /**
     * @var ModuleGenerator
     */
    public $root;

    public function getIncludes()
    {
        $result = [
            'Yii',
            'yii\helpers\Url'
        ];

        if($this->root->isContentContainerModule()) {

            $result[] = 'humhub\modules\content\components\ContentContainerActiveRecord';

            if($this->root->isSpaceModule) {
                $result[] = 'humhub\modules\space\models\Space';
            }

            if($this->root->isUserModule) {
                $result[] = 'humhub\modules\user\models\User';
            }

        }

        return $result;
    }

    public function getNameSpace()
    {
        return $this->root->getClassNamespace('Module');
    }

    public function getSuperClass()
    {
        return $this->root->isContentContainerModule() ? '\humhub\modules\content\components\ContentContainerModule' : '\humhub\components\Module';
    }

}