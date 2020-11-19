<?php

namespace denis909\theme;

class LinkPager extends \yii\widgets\LinkPager
{

    public $options = ['class' => 'pagination m-0 ml-auto'];

    public $linkOptions = ['class' => 'page-link'];

    public $pageCssClass = 'page-item';

    public $disabledListItemSubTagOptions = ['tag' => 'a', 'class' => 'page-link', 'href' => '#'];

    public $prevPageCssClass = 'page-item prev';

    public $nextPageCssClass = 'page-item next';    

}