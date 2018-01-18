<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\models\forms;

use yii\base\Model;

class RichtextModel extends Model
{
    public $richtext;

    public function rules()
    {
        return [
            ['richtext', 'safe']
        ];
    }
}