<?php

namespace humhub\modules\devtools\models;

class ContainerImageSetModel extends \yii\base\Model
{
    /**
     * @var string the instance of items to render
     */

    public $instance;

    /**
     * @var int the amount of visible items to render
     */
    public $max;

    /**
     * @var int the width of the visible imageamount of visible items to render
     */
    public $width;

    /**
     * @var int the height of the visible image
     */
    public $height;

    /**
     * @var array html options for the generated tag
     */
    public $htmlOptions;

    /**
     * @var boolean create link to the space or user profile
     */
    public $link;

    /**
     * @var array Html Options of the link
     */
    public $linkOptions;

    /**
     * @var string show tooltip with further information about the space or the user (Only available when link is true)
     * @since 1.3
     */
    public $tooltip;

    /**
     * @var array optional html options for the image tag
     */
    public $imageOptions;

    /**
     * @var int number of characters used in the acronym (for spaces only)
     */
    public $acronymCount;

    /**
     * @var int the width of the hidden image
     */
    public $hiddenImageWidth;

    /**
     * @var int the height of the hidden image
     */
    public $hiddenImageHeight;


    public function rules()
    {
        return [
            [['instance'], 'in', 'range' => ['user', 'space']],
            [['max', 'width', 'height', 'acronymCount', 'hiddenImageWidth', 'hiddenImageHeight'], 'integer'],
            [['link', 'tooltip'], 'boolean'],
            [['htmlOptions', 'linkOptions', 'imageOptions', 'instance'], 'string']
        ];
    }

    public function attributeHints()
    {
        return [
            'instance' => 'Select instance of items.',
            'max' => 'Maximal amount of visible items to render.',
            'width' => 'The width of the visible image in pixels. Default 50px.',
            'height' => 'The height of the visible image in pixels. Equals to width if empty.',
            'htmlOptions' => 'Html options for the generated tag.',
            'link' => 'Create link to the space or user profile.',
            'linkOptions' => 'Html Options of the link.',
            'tooltip' => 'Show tooltip with further information about the space or the user (Only available when link is true).',
            'imageOptions' => 'Optional html options for the image tag.',
            'acronymCount' => 'Number of characters used in the acronym (for spaces only).',
            'hiddenImageWidth' => 'The width of the hidden image in pixels. Default 24px.',
            'hiddenImageHeight' => 'The height of the hidden image in pixels. Equals to width if empty.',
        ];
    }

    public function prepareOptions($prop)
    {
        $options = [];
        $string = str_replace(['[', ']', '\'', '"'], '', $this->$prop);
        foreach (explode(',', $string) as $item) {
            $temp = explode('=>', $item);
            $key = trim($temp[0]);
            $value = trim($temp[1]);
            $options[$key] = $value;
        }

        return $options;
    }
}