<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\gii\generators;

use yii\gii\CodeFile;
use Yii;
use yii\helpers\Url;

/**
 * This generator is used to generate HumHub Modules.
 */
class ModuleGenerator extends \yii\gii\Generator
{
    public $namespace = "myCompany\\";
    public $moduleID = "example";

    public $icon;

    public $isSpaceModule = false;
    public $isUserModule = false;
    public $contentContainerName = 'Example';

    public $contentContainerDescription = 'Short description of the modules purpose.';

    public $outputPath = "@devtools/result";

    /**
     * @var ModuleClassHelper
     */
    public $moduleClass;

    public function init() {
        $this->templates['simple'] = $this->defaultTemplate();
        $this->moduleClass = new ModuleClassHelper(['root' => $this]);
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return Yii::t('DevtoolsModule.generators_ModuleGenerator', 'HumHub Module Generator');
    }

    /**
     * @inheritdoc
     */
    public function formView()
    {
        return '@devtools/gii/views/module/form.php';
    }

    public function defaultTemplate()
    {
        return Yii::getAlias('@devtools/gii/templates/modules/simple');
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return Yii::t('DevtoolsModule.generators_ModuleGenerator','This generator helps you to generate the skeleton code needed by a HumHub module.');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['moduleID', 'namespace'], 'trim'],
            [['moduleID', 'namespace', 'outputPath'], 'required'],
            [['isSpaceModule', 'isUserModule'], 'boolean'],
            [['contentContainerName', 'contentContainerDescription', 'icon'], 'string'],
            [['moduleID'], 'match', 'pattern' => '/^[\w\\-]+$/', 'message' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Only word characters and dashes are allowed e.g.: \'myModule\'.')],
            [['namespace'], 'match', 'pattern' => '/^[a-zA-Z0-9\\\]+\\\$/', 'message' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Only letters, numbers and backslashes are allowed, the namespace has to end with a backslash!. e.g. \'myCompany\' or \'myCompany\\social\'.')],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'moduleID' =>  Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Module ID'),
            'icon' =>  Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Module Navigation Icon'),
            'namespace' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Namespace'),
            'isUserModule' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Is User Profile Module'),
            'isSpaceModule' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Is Space Module'),
            'contentContainerName' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Name displayed in Spaces and User Profiles'),
            'contentContainerDescription' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Description displayed in Spaces and User Profiles'),
            'outputPath' =>  Yii::t('DevtoolsModule.generators_ModuleGenerator', 'Output Path'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function hints()
    {
        return [
            'moduleID' =>  Yii::t('DevtoolsModule.generators_ModuleGenerator', 'This refers to the ID of the module, e.g. <code>myApp</code>. The id is used within your class namespaces as well as the Module configuration.'),
            'outputPath' =>  Yii::t('DevtoolsModule.generators_ModuleGenerator', 'The temporary location of the generated files.'),
            'namespace' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'The namespace prefix is used for all your module classes e.g., <code>myCompany</code> or <code>myCompany\\intranet</code>.'),
            'isUserModule' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'This module should be installable on a user profile.'),
            'isSpaceModule' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'This module should be installable on space level.'),
            'contentContainerName' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'This name will be shown in the module overview of Spaces and User Profiles'),
            'contentContainerDescription' => Yii::t('DevtoolsModule.generators_ModuleGenerator', 'This description will be shown in module overview of Spaces and User Profiles'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function successMessage()
    {
        $output = "<p>".Yii::t('DevtoolsModule.generators_ModuleGenerator', "The module has been generated successfully.")."</p>";
        $output .= "<p>".Yii::t('DevtoolsModule.generators_ModuleGenerator', 'To access the module, you must enable it via the <a href="{url}">module admin panel</a>', ['url' => Url::to(["/admin/module"])])."</p>";
        return $output;
    }

    /**
     * @inheritdoc
     */
    public function requiredTemplates()
    {
        return [
            'config.php',
            'module.json.php',
            'Module.php',
            'Events.php',
            'controllers/AdminController.php',
            'controllers/IndexController.php',
            'views/index/index.php',
            'views/admin/index.php',
        ];
    }

    /**
     * @inheritdoc
     */
    public function stickyAttributes()
    {
        return array_merge(parent::stickyAttributes(), [
            'namespace', 'outputPath'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function generate()
    {
        $files = [];

        $files[] = new CodeFile(
            $this->getOutputPath("config.php"),
            $this->render("config.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath("module.json"),
            $this->render("module.json.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath("Module.php"),
            $this->render("Module.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath("Events.php"),
            $this->render("Events.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath("controllers/AdminController.php"),
            $this->render("controllers/AdminController.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath('controllers/IndexController.php'),
            $this->render("controllers/IndexController.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath('views/admin/index.php'),
            $this->render("views/admin/index.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath('views/index/index.php'),
            $this->render("views/index/index.php")
        );

        $files[] = new CodeFile(
            $this->getOutputPath('views/layouts/default.php'),
            $this->render('views/layouts/default.php')
        );

        $files[] = new CodeFile(
            $this->getOutputPath('assets/Assets.php'),
            $this->render('assets/Assets.php')
        );

        $files[] = new CodeFile(
            $this->getOutputPath('resources/js/humhub.'. $this->moduleID .'.js'),
            $this->render('resources/js/demo.js.php')
        );

        return $files;
    }

    public function translate($text, $view = false, $paramsStr = null)
    {
        $result = ($view) ? '<?= ' : '';
        $result .= 'Yii::t("'.ucfirst($this->moduleID).'Module.base", "'.$text.'"';
        $result .= ($paramsStr) ? ', '.$paramsStr : '';
        $result .= ')';
        return $view ? $result . ' ?>' : $result;
    }

    /**
     * @return boolean the directory that contains the module class
     */
    public function getOutputPath($file = '')
    {
        return Yii::getAlias($this->outputPath.'/'.$this->moduleID.'/'.$file);
    }

    /**
     * @return string the controller namespace of the module.
     */
    public function getClassNamespace($suffix = null)
    {
        $namespace = $this->namespace . 'humhub\\modules\\' . $this->moduleID;
        return  ($suffix) ? $namespace .  '\\' .$suffix : $namespace;
    }

    public function isContentContainerModule()
    {
        return $this->isSpaceModule || $this->isUserModule;
    }
}
