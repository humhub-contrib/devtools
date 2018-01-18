<?php

namespace humhub\modules\devtools\widgets;

class ShowcasePage extends \yii\base\Widget
{

    public $items;

    public function run()
    {
        return $this->render('showcasePage', [
                    'showcases' => $this->items
        ]);
    }
}

?>
