<?php

use yii\helpers\Html;
use app\widgets\EditableTreeGridView;
use yii\grid\GridView;
use yii\base\Widget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkflowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workflows';

?>
<div class="row">
    <div class="col-lg-12">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="workflow-index row">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Workflow', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Hover Rows
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <?= EditableTreeGridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                'name',
                                'regist_date',
                                'update_date',
                                ['class' => 'app\widgets\EditableTreeGridActionColumn'],
                            ],
                        ]); ?>

                        <table class="table table-hover tree">
                            <thead>
                            <tr>
                                <th width="50%">タイトル</th>
                                <th width="40%">予定工数</th>
                                <th width="10%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="treegrid-1">
                                <td>
                                    <a href="#" id="username" data-type="text" data-pk="1" data-url="/post" data-title="Enter username">superuser</a>
                                </td>
                                <td>Mark</td>
                                <td>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-plus-sign"></span>
                                    </a>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-minus-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="treegrid-2 treegrid-parent-1">
                                <td>2</td>
                                <td>Jacob</td>
                                <td>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-minus-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="treegrid-2-1 treegrid-parent-1">
                                <td>2</td>
                                <td>Jacob</td>
                                <td>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-minus-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="treegrid-3">
                                <td>3</td>
                                <td>Larry</td>
                                <td>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-plus-sign"></span>
                                    </a>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-minus-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="treegrid-4 treegrid-parent-3">
                                <td>4</td>
                                <td>Larry</td>
                                <td>
                                    <a data-pjax="0" aria-label="View" title="View" href="/project/view?id=1">
                                        <span class="glyphicon glyphicon-minus-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
