<?php

namespace humhub\modules\devtools\widgets;

class CodeView extends \yii\base\Widget
{

    public $type = '';

    const PHP_START = '<?php';
    const PHP_START_ECHO = '<?=';
    
    public function init()
    {
        parent::init();
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        $content = ob_get_clean();
        $codeblock = '```'.$this->type.$content.'```';
        return \humhub\widgets\MarkdownView::widget(['markdown' => $codeblock]);
    }
}

?>
