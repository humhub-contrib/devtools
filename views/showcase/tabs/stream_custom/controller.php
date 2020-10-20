<?php humhub\modules\devtools\widgets\CodeView::begin(['type' => 'php']); ?>

class StreamController extends DevtoolsController
{
    public function actions()
    {
        return [
            'stream' => [
                'class' => DashboardStreamAction::class,
                'filterHandlers' => [OwnContentStreamFilter::class],
                'streamEntryOptions' => (new WallStreamEntryOptions)->overwriteWidgetClass(ContentInfoWallStreamEntryWidget::class)
            ],
        ];
    }
}
<?php humhub\modules\devtools\widgets\CodeView::end(); ?>