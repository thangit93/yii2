<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\widgets;

use Yii;
use Closure;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\DataColumn;


class EditableTreeGridDataColumn extends DataColumn
{
    public $editable = true;

    public $enableSorting = false;

    protected function renderDataCellContent($model, $key, $index)
    {
        if ($this->editable === true) {
            return Html::tag('a', parent::renderDataCellContent($model, $key, $index), ['class' => 'editable']);
        } else {
            return parent::renderDataCellContent($model, $key, $index);
        }
    }
}
