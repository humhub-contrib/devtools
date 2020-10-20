<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools\controllers;

use humhub\libs\JSONResponse;
use humhub\modules\content\widgets\stream\WallStreamEntryOptions;
use humhub\modules\dashboard\components\actions\DashboardStreamAction;
use humhub\modules\devtools\stream\OwnContentStreamFilter;
use humhub\modules\devtools\widgets\ContentInfoWallStreamEntryWidget;
use humhub\modules\devtools\widgets\SimpleJsWidget;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class StreamController extends DevtoolsController
{
    public function actions()
    {
        return [
            'stream' => [
                'class' => DashboardStreamAction::class,
                'filterHandlers' => [OwnContentStreamFilter::class],
                'streamEntryOptions' => (new WallStreamEntryOptions)->overwriteWidgetClass(ContentInfoWallStreamEntryWidget::class)
            ],
        ];
    }
}
