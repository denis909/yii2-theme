<?php

namespace denis909\theme;

abstract class BaseTheme extends \yii\base\Component
{

    public function widget($class, array $params = [])
    {
        return $class::widget($params);
    }

    public function beginWidget($class, array $params = [])
    {
        return $class::begin($params);
    }

    public function endWidget($class)
    {
        $class::end();
    }
    
}