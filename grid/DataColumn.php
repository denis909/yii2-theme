<?php

namespace denis909\yii\grid;

abstract class DataColumn extends \yii\grid\DataColumn
{

	public $targetAttribute;

    protected function renderDataCellContent($model, $key, $index)
    {
    	if ($this->targetAttribute)
    	{
    		return $model->{$this->targetAttribute};
    	}

    	return parent::renderDataCellContent($model, $key, $index);
    }

}