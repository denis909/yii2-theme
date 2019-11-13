<?php

namespace denis909\theme;

class RelationColumn extends \yii\grid\DataColumn
{

	public $relation;
	
	public $relationAttribute;
	
    /**
     * {@inheritdoc}
     */
    protected function renderDataCellContent($model, $key, $index)
    {
		if ($model->{$this->relation})
		{
			$related = $model->{$this->relation};

			return $related->{$this->relationAttribute};
		}
	
		return null;
    }
	
}