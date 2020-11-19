<?php

namespace denis909\theme;

class GridView extends \yii\grid\GridView
{

    public $theme;

    public $dataColumnClass = DataColumn::class;

    public $pager = ['class' => LinkPager::class];

}