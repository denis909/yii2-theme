<?php

namespace denis909\yii\widgets;

class Menu extends \yii\widgets\Menu
{

	public $linkOptions = [];

	public $linkTemplate = null;

    protected function renderItem($item)
    {
        if (isset($item['url']))
        {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            
            if ($template)
            {
	            return strtr($template, [
	                '{url}' => Html::encode(Url::to($item['url'])),
	                '{label}' => $item['label']
	            ]);
        	}

        	$options = ArrayHelper::getValue($item, 'linkOptions', $this->linkOptions);

            return Html::a($item['label'], $item['url'], $options);
        }

        $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

        return strtr($template, [
            '{label}' => $item['label']
        ]);
    }

}