<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\devtools\models;

use humhub\modules\user\models\User;
use Yii;

class UploadModel extends \yii\base\Model
{
    /**
     * @var
     */
    public $files = [];
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return  [
            [['files'], 'safe'],
        ];
    }
}
