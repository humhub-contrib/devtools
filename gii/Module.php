<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\gii;

class Module extends \yii\gii\Module
{
    public function init()
    {
        parent::init();
        $moduleClass = new \ReflectionClass(\yii\gii\Module::class);
        $this->setBasePath(dirname($moduleClass->getFileName()));
    }

    protected function coreGenerators()
    {
        return [
            'module' => ['class' => \humhub\modules\devtools\gii\generators\ModuleGenerator::class],
            /*'crud' => ['class' => 'yii\gii\generators\crud\Generator'],
            'controller' => ['class' => 'yii\gii\generators\controller\Generator'],
            'form' => ['class' => 'yii\gii\generators\form\Generator'],
            'module' => ['class' => 'yii\gii\generators\module\Generator'],
            'extension' => ['class' => 'yii\gii\generators\extension\Generator'],*/
        ];
    }

}