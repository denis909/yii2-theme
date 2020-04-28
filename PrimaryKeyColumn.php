<?php

namespace denis909\yii;

class PrimaryKeyColumn extends DataColumn
{

	public $contentOptions = ['style' => 'width: 1%; white-space: nowrap; text-align: right;'];

	public $headerOptions = ['style' => 'width: 1%;'];

    public $prefix = '#';

    public function getDataCellValue($model, $key, $index)
    {
        $return = parent::getDataCellValue($model, $key, $index);

        if ($return)
        {
            $return = $this->prefix . (string) $return;
        }

        return $return;
    }

}