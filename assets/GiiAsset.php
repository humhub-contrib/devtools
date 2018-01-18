<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\assets;

use humhub\assets\FontAwesomeAsset;
use humhub\assets\Select2Asset;
use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class GiiAsset extends AssetBundle
{
    public $sourcePath = '@devtools/resources';

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

    public $css = [
        'css/select2.css'
    ];

    public $depends = [BootstrapAsset::class, JqueryAsset::class, Select2Asset::class, FontAwesomeAsset::class];


}
