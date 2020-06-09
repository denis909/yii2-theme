<?php

namespace denis909\theme;

trait ActiveFieldTrait
{

    public function imageFileInput(array $options = [])
    {
        return $this->fileInput($options);
    }

    public function checkbox($options = [], $enclosedByLabel = false)
    {
        if (!$enclosedByLabel)
        {
            $this->template = str_replace('{input}', '<br>{input}', $this->template);
        }

        return parent::checkbox($options, $enclosedByLabel);
    }

}