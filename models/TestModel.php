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

class TestModel extends \yii\base\Model
{
    /**
     * @var string text
     */
    public $text;

    /**
     * @var string richtext
     */
    public $richtext;

    /**
     * @var string[]
     */
    public $user;

    /**
     * @var int selection
     */
    public $selection;

    /**
     * @return array
     */
    public function getOptions() {
        return [
            1 => Yii::t('DevtoolsModule.models_TestModel', 'Selection 1'),
            2 => Yii::t('DevtoolsModule.models_TestModel', 'Selection 2'),
            3 => Yii::t('DevtoolsModule.models_TestModel', 'Selection 3'),
            4 => Yii::t('DevtoolsModule.models_TestModel', 'Selection 4')
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return  [
            [['text', 'richtext', 'selection'], 'required'],
            ['user', 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'text' => Yii::t('DevtoolsModule.models_TestModel', 'Simple text field'),
            'richtext' => Yii::t('DevtoolsModule.models_TestModel', 'Richtext field'),
            'user' => Yii::t('DevtoolsModule.models_TestModel', 'Userpicker field'),
            'selection' => Yii::t('DevtoolsModule.models_TestModel', 'Selection field'),
        ];
    }

    public function getUserModels()
    {
        if(empty($this->user)) {
            return [];
        } else {
            return User::find()->active()->andWhere(['in', 'user.guid', $this->user])->all();
        }
    }

    public function getSelectionText()
    {
        $options = $this->getOptions();
        if(isset($options[$this->selection])) {
            return $options[$this->selection];
        }

        return '';
    }
}