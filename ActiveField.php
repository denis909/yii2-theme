<?php

namespace denis909\theme;

class ActiveField extends \yii\widgets\ActiveField
{

    public function checkbox($options = [], $enclosedByLabel = false)
    {
        if (!$enclosedByLabel)
        {
            $this->template = str_replace('{input}', '<br>{input}', $this->template);
        }

        return parent::checkbox($options, $enclosedByLabel);
    }

}