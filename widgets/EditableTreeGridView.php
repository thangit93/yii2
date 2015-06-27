<?php

namespace app\widgets;

use app\assets\EditableTreeGridViewAsset;
use Yii;
use Closure;
use yii\base\Widget;
use yii\i18n\Formatter;
use yii\base\InvalidConfigException;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\BaseListView;
use yii\grid\GridView;
use yii\grid\Column;
use yii\base\Model;

/**
 * The EditableTreeGridView widget is used to display data in a grid.
 *
 * And is used to edit displayed data too.
 *
 * It provides features like [[sorter|sorting]], [[pager|paging]] and also [[filterModel|filtering]] the data.
 *
 * A basic usage looks like the following:
 *
 * ```php
 * <?= GridView::widget([
 *     'dataProvider' => $dataProvider,
 *     'columns' => [
 *         'id',
 *         'name',
 *         'created_at:datetime',
 *         // ...
 *     ],
 * ]) ?>
 * ```
 *
 * The columns of the grid table are configured in terms of [[Column]] classes,
 * which are configured via [[columns]].
 *
 * The look and feel of a grid view can be customized using the large amount of properties.
 *
 * @author Ryosuke Murai <r0317k0226@gmail.com>
 * @since 2.0
 */
class EditableTreeGridView extends GridView
{
    public $dataColumnClass = 'app\widgets\EditableTreeGridDataColumn';

    public $tableOptions = ['class' => 'table table-hover tree'];
    /**
     * @var array the HTML attributes for the container tag of the grid view.
     * The "tag" element specifies the tag name of the container element and defaults to "div".
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];
    /**
     * @var array the HTML attributes for the table header row.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $headerRowOptions = [];
    /**
     * @var array the HTML attributes for the table footer row.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $footerRowOptions = [];
    /**
     * @var array|Closure the HTML attributes for the table body rows. This can be either an array
     * specifying the common HTML attributes for all body rows, or an anonymous function that
     * returns an array of the HTML attributes. The anonymous function will be called once for every
     * data model returned by [[dataProvider]]. It should have the following signature:
     *
     * ```php
     * function ($model, $key, $index, $grid)
     * ```
     *
     * - `$model`: the current data model being rendered
     * - `$key`: the key value associated with the current data model
     * - `$index`: the zero-based index of the data model in the model array returned by [[dataProvider]]
     * - `$grid`: the GridView object
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $rowOptions = [];

    public $layout = "{items}";

    /**
     * Runs the widget.
     */
    public function run()
    {
        $this->afterRow = function ($model, $key, $index, $callee){
            var_dump($model, $key, $index, $callee);
        };

        $id = $this->options['id'];
        $options = Json::htmlEncode($this->getClientOptions());
        $view = $this->getView();
        EditableTreeGridViewAsset::register($view);
        $view->registerJs("jQuery('#$id .tree').treegrid();");
        $view->registerJs("$.fn.editable.defaults.mode = 'inline';");
        $view->registerJs("$('#$id .editable').editable($options);");
        parent::run();
    }
}
