<?php

namespace denis909\yii;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

class Theme extends \yii\base\Component
{

    const DETAIL_VIEW = DetailView::class;

    const ACTIVE_FORM = ActiveForm::class;

    const GRID_VIEW = GridView::class;

    const LIST_VIEW = ListView::class;

    const ACTION_MENU = ActionMenu::class;

    const MAIN_MENU = MainMenu::class;

    const BREADCRUMBS = Breadcrumbs::class;

    const ACTION_COLUMN = ActionColumn::class;

    const LINK_COLUMN = LinkColumn::class;

    const TIMESTAMP_COLUMN = TimestampColumn::class;

    const DATA_COLUMN = DataColumn::class;

    const SERIAL_COLUMN = SerialColumn::class;

    const PRIMARY_COLUMN = PrimaryColumn::class;

	const RELATION_COLUMN = RelationColumn::class;

	const IMAGE_PREVIEW = ImagePreview::class;

    const PJAX = Pjax::class;
    
    public $breadcrumbsOptions = [];

    public $mainMenuOptions = [];

    public $actionMenuOptions = [];

    public $submitButtonOptions = [];

    public $gridViewOptions = [];

    public $listViewOptions = [];

    public $detailViewOptions = [];

    public $activeFormOptions = [];

    public $imagePreviewOptions = [];

    public $pjaxOptions = [
        'timeout' => 0,
        'enablePushState' => false,
        'enableReplaceState' => false
    ];

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

    public function beginPjax(array $options = [])
    {
        $options = ArrayHelper::merge($this->pjaxOptions, $options);

        return $this->beginWidget(static::PJAX, $options);
    }

    public function endPjax()
    {
        $this->endWidget(static::PJAX);
    }

    public function beginActiveForm(array $options = [])
    {
        $options = ArrayHelper::merge($this->activeFormOptions, $options);

        return $this->beginWidget(static::ACTIVE_FORM, $options);
    }

    public function endActiveForm()
    {
        $this->endWidget(static::ACTIVE_FORM);
    }

    public function gridView(array $options = [])
    {
        $options = ArrayHelper::merge($this->gridViewOptions, $options);

        return $this->widget(static::GRID_VIEW, $options);
    }

    public function listView(array $options = [])
    {
        $options = ArrayHelper::merge($this->listViewOptions, $options);

        return $this->widget(static::LIST_VIEW, $options);
    }    

    public function detailView(array $options = [])
    {
        $options = ArrayHelper::merge($this->detailViewOptions, $options);

        return $this->widget(static::DETAIL_VIEW, $options);
    }

    public function breadcrumbs(array $options = [])
    {
        $options = ArrayHelper::merge($this->breadcrumbsOptions, $options);

        return $this->widget(static::BREADCRUMBS, $options);
    }

    public function actionMenu(array $options = [])
    {
        $options = ArrayHelper::merge($this->actionMenuOptions, $options);

        return $this->widget(static::ACTION_MENU, $options);
    }

    public function mainMenu(array $options = [])
    {
        $options = ArrayHelper::merge($this->mainMenuOptions, $options);

        return $this->widget(static::MAIN_MENU, $options);
    }

    public function submitButton($name, array $options = [])
    {
        $options = ArrayHelper::merge($this->submitButtonOptions, $options);

        return Html::submitButton($name, $options);
    }

    public function imagePreview($url, array $options = [])
    {
        $options = ArrayHelper::merge($this->imagePreviewOptions, $options);

        $options['url'] = $url;

        return $this->widget(static::IMAGE_PREVIEW, $options);
    }

}