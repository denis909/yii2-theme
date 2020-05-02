<?php

namespace denis909\yii;

interface ActiveFormInterface
{

    public function submitButton($name, array $options = []);

    public function saveButton($name, array $options = []);

}