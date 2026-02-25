<?php

namespace humhub\modules\devtools\widgets;

use yii\base\Widget;

class CodeView extends Widget
{
    public $type = '';

    public const PHP_START = '<?php';
    public const PHP_START_ECHO = '<?=';

    public function init()
    {
        parent::init();
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        return '<pre><code class="language-' . $this->type . '">'
            . htmlspecialchars(trim(ob_get_clean()))
            . '</code></pre>';
    }
}
