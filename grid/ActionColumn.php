<?php

namespace denis909\yii\grid;

use yii\helpers\Url;

abstract class ActionColumn extends \yii\grid\ActionColumn
{

	public $contentOptions = ['style' => 'width: 1%; white-space: nowrap;'];

	public $baseUrl;

    public function createUrl($action, $model, $key, $index)
    {
        if (is_callable($this->urlCreator)) 
        {
            return parent::createUrl($action, $model, $key, $index);
        } 

        $params = is_array($key) ? $key : ['id' => (string) $key];
       
        if ($this->baseUrl)
        {
        	$params[0] = $this->baseUrl . '/' . $action;
    	}
    	else
    	{
    		$params[0] = $this->controller ? $this->controller . '/' . $action : $action;	
    	}

        if ($action != 'delete')
        {
            $params['returnUrl'] = Url::current();    
        }
        
        return Url::toRoute($params);
    }

}