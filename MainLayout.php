<?php

namespace denis909\theme;

class MainLayout extends \yii\base\Widget
{

    public $copyright = 'Copyright © 2019 - <a href="#">My Company</a>.';

    public $optionsMenu = [];

    public $content;

    public $breadcrumbs = [];

    public $user;

    public $username;

    public $avatarUrl;

    public $userMenu = [];

    public $accountMenu = [];

    public $accountDescription;

    public $infoMessages = [];

    public $successMessages = [];

    public $errorMessages = [];

    public $actionMenu = [];

    public $mainMenu = [];

    public $enableCard = true;

    public $cardTitle;

    public $layoutOptions = [];

    public $messageClass = AlertMessage::class;

    public $assetsClass = Assets::class;

    public $footerMenu = [];

    public function getParams()
    {
        return [
            'copyright' => str_replace('{year}', date('Y'), $this->copyright),
            'optionsMenu' => $this->optionsMenu,
            'content' => $this->content,
            'breadcrumbs' => $this->breadcrumbs,
            'user' => $this->user,
            'username' => $this->username,
            'userMenu' => $this->userMenu,
            'accountMenu' => $this->accountMenu,
            'accountDescription' => $this->accountDescription,
            'infoMessages' => $this->infoMessages,
            'successMessages' => $this->successMessages,
            'errorMessages' => $this->errorMessages,
            'actionMenu' => $this->actionMenu,
            'mainMenu' => $this->mainMenu,
            'enableCard' => $this->enableCard,
            'cardTitle' => $this->cardTitle,
            'layoutOptions' => $this->layoutOptions,
            'messageClass' => $this->messageClass,
            'assetsClass' => $this->assetsClass,
            'avatarUrl' => $this->avatarUrl
        ];
    }

}