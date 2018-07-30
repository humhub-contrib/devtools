<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use Yii;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class IndexController extends \humhub\components\Controller
{
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }

    public $subLayout = "@devtools/views/index/_layout";

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
