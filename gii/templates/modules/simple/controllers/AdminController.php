<?php /* @var $generator \humhub\modules\devtools\gii\generators\ModuleGenerator */?><?= "<?php\n"; ?>

namespace <?= $generator->getClassNamespace('controllers') ?>;

use humhub\modules\admin\components\Controller;

class AdminController extends Controller
{

    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

