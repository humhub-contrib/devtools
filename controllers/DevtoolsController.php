<?php

namespace humhub\modules\devtools\controllers;

use humhub\components\Controller;

class DevtoolsController extends Controller
{
    public function getAccessRules()
    {
        return [
            ['admin'],
        ];
    }
}
