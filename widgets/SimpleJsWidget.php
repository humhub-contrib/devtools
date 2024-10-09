<?php

namespace humhub\modules\devtools\widgets;

use Yii;
use humhub\widgets\Reloadable;
use humhub\widgets\Button;
use humhub\libs\Html;
use humhub\widgets\JsWidget;

class SimpleJsWidget extends JsWidget implements Reloadable
{
    public $jsWidget = 'demo.jswidget.SimpleJsWidget';

    public $init = true;

    public function run()
    {
        $timestampContainer = Html::tag('div', '', ['class' => 'timestamp']);
        $button = Button::primary()->cssClass('toggleButton')->action('toggle')->loader(false);
        $reloadButton = Button::primary(Yii::t('DevtoolsModule.views_showcase_jswidget', 'Reload'))->cssClass('reloadButton')->action('reload')->loader(false);
        return Html::tag('div', $timestampContainer . '<br>' . $button . ' ' . $reloadButton, $this->getOptions());
    }

    public function getAttributes()
    {
        return [
            'class' => 'alert alert-info',
        ];
    }

    public function getData()
    {
        return [
            'start-text' => Yii::t('DevtoolsModule.views_showcase_jswidget', 'Start'),
            'stop-text' => Yii::t('DevtoolsModule.views_showcase_jswidget', 'Stop'),
        ];
    }

    /**
     * @return string|array url used to reload this widget
     */
    public function getReloadUrl()
    {
        return ['/devtools/widget/simple'];
    }
}
