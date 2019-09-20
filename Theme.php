<?php

namespace denis909\theme;

class Theme extends \yii\base\Component
{

    const ACTIVE_FORM = ActiveForm::class;

    const GRID_VIEW = GridView::class;

    const LIST_VIEW = ListView::class;

    const DETAIL_VIEW = DetailView::class;

    const MENU = Menu::class;

    const ACTION_MENU = ActionMenu::class;

    const MAIN_MENU = MainMenu::class;

    const BREADCRUMBS = Breadcrumbs::class;

    public function widget($class, array $params = [])
    {
        return $class::widget($params);
    }

    public function beginWidget($class, array $params = [])
    {
        return $class::begin($params);
    }

    public function endWidget($class)
    {
        $class::end();
    }

    public function beginActiveForm(array $params = [])
    {
        return $this->beginWidget(static::ACTIVE_FORM, $params);
    }

    public function endActiveForm()
    {
        $this->endWidget(static::ACTIVE_FORM);
    }

    public function gridView(array $params = [])
    {
        return $this->widget(static::GRID_VIEW, $params);
    }

    public function listView(array $params = [])
    {
        return $this->widget(static::LIST_VIEW, $params);
    }    

    public function detailView(array $params = [])
    {
        return $this->widget(static::DETAIL_VIEW, $params);
    }

    public function breadcrumbs(array $params = [])
    {
        return $this->widget(static::BREADCRUMBS, $params);
    }

    public function menu(array $params = [])
    {
        return $this->widget(static::MENU, $params);
    }

    public function actionMenu(array $params = [])
    {
        return $this->widget(static::ACTION_MENU, $params);
    }

    public function mainMenu(array $params = [])
    {
        return $this->widget(static::MAIN_MENU, $params);
    }

}