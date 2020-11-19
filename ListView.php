<?php

namespace denis909\theme;

class ListView extends \yii\widgets\ListView
{

    public $caption;

    public $captionLayout = '{caption}';

    public $pager = ['class' => LinkPager::class];

    public $layout = "{caption}\n{summary}\n{items}\n{pager}";

    public $itemsLayout = '{items}';

    public $summaryLayout = '{summary}';

    public $sorterLayout = '{sorter}';

    public $pagerLayout = '{pager}';

    public function renderSummary()
    {
        $return = parent::renderSummary();

        $return = strtr($this->summaryLayout, ['{summary}' => $return]);

        return $return;
    }

    public function renderPager()
    {
        $return = parent::renderPager();

        $return = strtr($this->pagerLayout, ['{pager}' => $return]);

        return $return;
    }

    public function renderSorter()
    {
        $return = parent::renderSorter();

        $return = strtr($this->sorterLayout, ['{sorter}' => $return]);

        return $return;
    }

    public function renderItems()
    {
        $return = parent::renderItems();

        $return = strtr($this->itemsLayout, ['{items}' => $return]);

        return $return;
    }

    public function renderCaption()
    {
        if ($this->caption)
        {
            return strtr($this->captionLayout, ['{caption}' => $this->caption]);
        }

        return '';
    }

    public function renderSection($name)
    {
        switch ($name) {
            case '{caption}':
                return $this->renderCaption();
            break;
        }

        return parent::renderSection($name);
    }

}