<?php

namespace denis909\yii\grid;

use yii\helpers\Html;

abstract class LinkColumn extends DataColumn
{

	public $label;

	public $url;

	public $linkOptions = [];

    protected function renderDataCellContent($model, $key, $index)
    {
    	if ($this->url instanceof Closure)
    	{
    		$url = call_user_func($this->url, $model, $key, $index);
    	}
    	else
    	{
    		$url = $this->url;
    	}

    	return Html::a($this->label, $url, $this->linkOptions);
    }

}