<?php

namespace denis909\theme;

trait ActiveFieldTrait
{

    public function date(array $options = [])
    {
        return $this->widget(static::DATE, $options);
    }

    public function daterange(array $options = [])
    {
        return $this->widget(static::DATERANGE, $options);
    }

    public function datetime(array $options = [])
    {
        return $this->widget(static::DATETIME, $options);
    }

    public function time(array $options = [])
    {
        return $this->widget(static::TIME, $options);
    }

    public function select2(array $options = [])
    { 
        return $this->widget(static::SELECT2, $options);
    }

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