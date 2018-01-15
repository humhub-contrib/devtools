<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

namespace <?= $generator->getClassNamespace('controllers') ?>;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@<?= $generator->moduleID ?>/views/layouts/default";

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

