<?php

use yii\helpers\Html;

$image = Html::img($url, $imageOptions);

$link = Html::a($image, $url, $linkOptions);

echo Html::tag('div', $link, $options);