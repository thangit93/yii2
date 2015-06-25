<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = $model->name;
?>

<div class="row">
    <div class="col-lg-12">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="project-view row">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->project_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->project_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'project_id',
            'create_user_id',
            'name',
            'regist_date',
            'update_date',
        ],
    ]) ?>

    <h3>タスク一覧</h3>
    <p>
        <?= Html::a('Add Task', ['task/create', 'id' => $model->project_id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'task_id',
            'project_id',
            'user_id',
            'name',
            'start_date',
            // 'end_date',
            // 'estimated_time:datetime',
            // 'operating_time:datetime',
            // 'regist_date',
            // 'update_date',
            // 'del_chk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
