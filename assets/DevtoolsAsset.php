<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\assets;

use yii\web\AssetBundle;

class DevtoolsAsset extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => false
    ];
    public $sourcePath = '@devtools/resources';
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = ['css/humhub.devtools.css'];
    public $js = ['js/humhub.devtools.js'];
}
