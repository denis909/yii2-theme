<?php

namespace denis909\theme;

use Yii;

class Layout extends \yii\base\Widget
{

    public $content;

    public $lang;

    public $assetsClass = Assets::class;

    public function init()
    {
        parent::init();
    
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();

        if (!$content && $this->content)
        {
            $content = $this->content;
        }

        $lang = $this->lang;

        if (!$lang)
        {
            $lang = substr(Yii::$app->language, 0, 2);
        }

        return $this->render('layout', [
            'assetsClass' => $this->assetsClass,
            'content' => $content,
            'lang' => $lang
        ]);
    }

}