<?php

namespace david\humhub\modules\demo\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@demo/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

