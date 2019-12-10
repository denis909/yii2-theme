<?php

namespace denis909\yii;

class ImagePreview extends \yii\base\Widget
{

    public $theme;

    public $url;

    public $options = [];

    public $linkOptions = [];

    public $imageOptions = [];

    public function run()
    {
        if (!$this->url)
        {
            return;
        }

        return $this->render('image-preview', [
            'theme' => $this->theme,
            'url' => $this->url,
            'options' => $this->options,
            'linkOptions' => $this->linkOptions,
            'imageOptions' => $this->imageOptions
        ]);
    }

}