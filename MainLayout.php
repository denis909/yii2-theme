<?php

namespace denis909\theme;

class MainLayout extends \yii\base\Widget
{

    public $copyright;

    public $optionsMenu = [];

    public $content;

    public $breadcrumbs = [];

    public $user;

    public $infoMessages = [];

    public $successMessages = [];

    public $errorMessages = [];

    public $actionMenu = [];

    public $mainMenu = [];

    public $enableCard = true;

    public $cardTitle;

}