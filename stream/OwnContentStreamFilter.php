<?php

namespace humhub\modules\devtools\stream;

use humhub\modules\stream\models\filters\StreamQueryFilter;
use Yii;

class OwnContentStreamFilter extends StreamQueryFilter
{
    const FILTER_NAME = 'filter_my_content';

    public $filters = [];

    public function rules()
    {
        return [
            ['filters', 'safe']
        ];
    }

    public function apply()
    {
        if($this->filters === static::FILTER_NAME || in_array(static::FILTER_NAME, $this->filters, true)) {
            $this->streamQuery->query()->andWhere(['content.created_by' => Yii::$app->user->id]);
        }
    }
}