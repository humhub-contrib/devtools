<?php

namespace humhub\modules\devtools\widgets;

use Yii;

class Showcase extends \yii\base\Widget
{

    public $id;
    public $title;
    public $description;
    public $tabs;
    public $guests = true;
    
    public function run()
    {
        return $this->render('showcase', [
                    'id' => $this->id,
                    'title' => $this->title,
                    'description' => $this->description,
                    'tabs' => $this->tabs,
                    'disabled' => !$this->guests && Yii::$app->user->isGuest
        ]);
    }
}

?>
