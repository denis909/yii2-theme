<?php

namespace denis909\theme;

class ActiveForm extends \yii\widgets\ActiveForm implements ActiveFormInterface
{

    use ActiveFormTrait;

    public $fieldClass = ActiveField::class;

    public $enableClientValidation = false;

    public $enableClientScript = false;

    public $enableAjaxValidation = false;

    public $submitButtonOptions = ['class' => 'btn btn-primary'];

    public $saveButtonOptions = ['class' => 'btn btn-light'];

}