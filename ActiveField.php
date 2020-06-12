<?php

namespace denis909\theme;

class ActiveField extends \yii\widgets\ActiveField implements ActiveFieldInterface
{

    use ActiveFieldTrait;

    const DATE = DateInput::class;

    const DATERANGE = DateRangeInput::class;

    const DATETIME = DateTimeInput::class;

    const TIME = TimeInput::class;

    const SELECT2 = Select2Input::class;

}