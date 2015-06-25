<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
                        <table class="table table-hover tree">
                            <thead>
                            <tr>
                                <th>タイトル</th>
                                <th>予定工数</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="treegrid-1">
                                <td>1</td>
                                <td>Mark</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-xs" type="button">Add</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="treegrid-2 treegrid-parent-1">
                                <td>2</td>
                                <td>Jacob</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-info btn-xs" type="button">Update</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-danger btn-xs" type="button">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="treegrid-2-1 treegrid-parent-1">
                                <td>2</td>
                                <td>Jacob</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-info btn-xs" type="button">Update</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-danger btn-xs" type="button">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="treegrid-3">
                                <td>3</td>
                                <td>Larry</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-xs" type="button">Add</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="treegrid-4 treegrid-parent-3">
                                <td>4</td>
                                <td>Larry</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-info btn-xs" type="button">Update</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-danger btn-xs" type="button">Delete</button>
                                    </div>
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
