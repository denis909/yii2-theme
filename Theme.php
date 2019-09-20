<?php

namespace denis909\theme;

class Theme extends \yii\base\Component
{

    const ACTIVE_FORM = ActiveForm::class;

    const ACTION_MENU = ActionMenu::class;

    const GRID_VIEW = GridView::class;

    const LIST_VIEW = ListView::class;

    const DETAIL_VIEW = DetailView::class;

    const MENU = Menu::class;

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

    public function menu(array $params = [])
    {
        return $this->widget(const::MENU, $params);
    }

    public function gridView(array $params = [])
    {
        return $this->widget(const::GRID_VIEW, $params);
    }

    public function listView(array $params = [])
    {
        return $this->widget(const::LIST_VIEW, $params);
    }    

    public function detailView(array $params = [])
    {
        return $this->widget(const::DETAIL_VIEW, $params);
    }

    public function breadcrumbs(array $params = [])
    {
        return $this->widget(const::BREADCRUMBS, $params);
    }

    public function actionMenu(array $params = [])
    {
        return $this->widget(const::ACTION_MENU, $params);
    }

}