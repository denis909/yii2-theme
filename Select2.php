<?php

namespace denis909\theme;

use Yii;

class Select2 extends \kartik\select2\Select2
{

    public $bsVersion = '4';

    public function init()
    {
        Yii::$app->params['bsVersion'] = 4;

        parent::init();
    }
    
}