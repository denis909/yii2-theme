<?php

namespace denis909\yii;

use yii\helpers\Html;

class ActiveForm extends \yii\widgets\ActiveForm
{

    public $fieldClass = ActiveField::class;

    public function submitButton($name, array $options = [])
    {
        return Html::submitButton($name, $options);
    }
    
}