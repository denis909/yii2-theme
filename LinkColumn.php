<?php

namespace denis909\theme;

use yii\helpers\Html;
use Closure;

class LinkColumn extends DataColumn
{

    public $contentOptions = [
        'style' => 'width: 1%; white-space: nowrap;'
    ];

    public $headerOptions = [
        'style' => 'width: 1%;'
    ];

    public $linkLabel;

    public $url;

    public $urlAttribute;

    public $linkOptions = [];

    protected function renderDataCellContent($model, $key, $index)
    {
        if ($this->urlAttribute)
        {
            $url = $model->{$this->urlAttribute};
        }
        else
        {
            if ($this->url instanceof Closure)
            {
                $url = call_user_func($this->url, $model, $key, $index);
            }
            else
            {
                $url = $this->url;
            }
        }

        return Html::a($this->linkLabel, $url, $this->linkOptions);
    }

}