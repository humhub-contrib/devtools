<?php

namespace humhub\modules\devtools\widgets;

class ShowcaseTabContent extends \yii\base\Widget
{

    public $id;
    public $tab;
    
    public function run()
    {
        $path = '@devtools/views/showcase/tabs/'.$this->id.'/'.$this->tab['id'].'.php';
        return $this->renderFile($path);
    }
}

?>
