<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkflowSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workflow-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'workflow_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'regist_date') ?>

    <?= $form->field($model, 'update_date') ?>

    <?= $form->field($model, 'del_chk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
