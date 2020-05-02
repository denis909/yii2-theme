<?php

namespace denis909\yii;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

trait ActiveFormTrait
{

    public function submitButton($name, array $options = [])
    {
        if (property_exists($this, 'submitButtonOptions'))
        {
            $options = ArrayHelper::merge($this->submitButtonOptions, $options);
        }

        $options['name'] = 'action';

        $options['value'] = 'submit';

        return Html::submitButton($name, $options);
    }

    public function saveButton($name, array $options = [])
    {
        if (property_exists($this, 'saveButtonOptions'))
        {
            $options = ArrayHelper::merge($this->saveButtonOptions, $options);
        }

        $options['name'] = 'action';

        $options['value'] = 'save';

        return Html::submitButton($name, $options);
    }

}