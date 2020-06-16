<?php

namespace denis909\theme;

class AlertMessage extends \yii\base\Widget
{

    public $message;

    public $type = 'success';

    public function run()
    {
        return $this->render('alert-message', [
            'message' => $this->message,
            'type' => $this->type
        ]);
    }

}