ContentInfoStreamFilterNavigation widget:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>
namespace humhub\modules\devtools\widgets;

use humhub\modules\ui\filter\widgets\FilterNavigation;

class ContentInfoStreamFilterNavigation extends FilterNavigation
{

    protected function initFilterPanels(){}

    protected function initFilterBlocks(){}

    protected function initFilters(){}

    /**
     * @inheritDoc
     */
    public function getAttributes()
    {
        return [
            'style' => 'padding-left:15px'
        ];
    }
}
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

Filter view (filterNavigation.php): <br><br>

<?= highlight_file('filter_view.phps') ?>

<br><br>

Filter implementation:

<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>
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
?>
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

