<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\widgets;

use humhub\components\Widget;
use yii\base\Model;

/**
 * User Administration Menu
 *
 * @author Basti
 */
class IconSelect extends Widget
{

    /**
     * @var Model
     */
    public $model;
    public $attribute;

    public function run()
    {
        return $this->render('iconSelect', [
            'model' => $this->model,
            'attribute' => $this->attribute,
            'formName' => $this->model->formName().'['.$this->attribute.']'
        ]);
    }
}
