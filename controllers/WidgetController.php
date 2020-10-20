<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use humhub\libs\JSONResponse;
use humhub\modules\devtools\widgets\SimpleJsWidget;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class WidgetController extends DevtoolsController
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function actionSimple()
    {
        return JSONResponse::output(SimpleJsWidget::widget());
    }
}
