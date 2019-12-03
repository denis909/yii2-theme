<?php

namespace denis909\theme;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Theme extends BaseTheme
{

    const ACTIVE_FORM = ActiveForm::class;

    const GRID_VIEW = GridView::class;

    const LIST_VIEW = ListView::class;

    const DETAIL_VIEW = DetailView::class;

    const MENU = Menu::class;

    const ACTION_MENU = ActionMenu::class;

    const MAIN_MENU = MainMenu::class;

    const BREADCRUMBS = Breadcrumbs::class;

    const ACTION_COLUMN = ActionColumn::class;

    const LINK_COLUMN = LinkColumn::class;

    const TIMESTAMP_COLUMN = TimestampColumn::class;

    const DATA_COLUMN = DataColumn::class;

    const SERIAL_COLUMN = SerialColumn::class;

    const PRIMARY_COLUMN = PrimaryColumn::class;

    const IMAGE_PREVIEW = ImagePreview::class;

    public $imagePreviewOptions = [];

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

    public function submitButton($name, array $options = [])
    {
        return Html::submitButton($name, $options);
    }

    public function imagePreview($url, array $options = [])
    {
        $options = ArrayHelper::merge($this->imagePreviewOptions, $options);

        $options['url'] = $url;

        return $this->widget(static::IMAGE_PREVIEW, $options);
    }

}