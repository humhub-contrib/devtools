Widget class:


<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']);

use humhub\libs\Html;
use humhub\modules\content\widgets\VisibilityIcon; ?>

namespace humhub\modules\devtools\widgets;


use humhub\modules\content\widgets\stream\StreamEntryWidget;

class ContentInfoWallStreamEntryWidget extends StreamEntryWidget
{

    /**
     * @return string rendered wall entry body without the layoutRoot wrapper
     */
    protected function renderBody()
    {
        return $this->render('contentInfoWallStreamEntry', [
            'model' => $this->model
        ]);
    }
}
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>

Widget view:
<div class="markdown-render">
<?= highlight_file('streamEntry_view.phps') ?>
</div>
