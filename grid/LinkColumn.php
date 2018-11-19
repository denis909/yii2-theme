<?php

namespace denis909\yii\grid;

use yii\helpers\Html;
use Closure;

abstract class LinkColumn extends DataColumn
{

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