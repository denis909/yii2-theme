<?php

namespace denis909\yii;

use Yii;

class TimestampColumn extends DataColumn
{

	public $dateFormat = 'long';

	public $format = 'raw';

    protected function renderDataCellContent($model, $key, $index)
    {
		return Yii::$app->formatter->asDate($model->{$this->attribute}, $this->dateFormat);
    }

}