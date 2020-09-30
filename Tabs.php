<?php

namespace denis909\theme;

class Tabs extends \kartik\tabs\TabsX
{

    public $bsVersion = '4';

    public static function widget($config = [])
    {
        Yii::$app->params['bsVersion'] = 4;

        return parent::widget($config);
    }

    public function init()
    {
        Yii::$app->params['bsVersion'] = 4;

        parent::init();
    }

}