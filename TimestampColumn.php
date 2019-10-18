<?php

namespace denis909\yii\grid;

use Yii;

class TimestampColumn extends  \yii\grid\DataColumn
{

	public $dateFormat = 'long';

	public $format = 'raw';

    protected function renderDataCellContent($model, $key, $index)
    {
		return Yii::$app->formatter->asDate($model->{$this->attribute}, $this->dateFormat);
    }

}