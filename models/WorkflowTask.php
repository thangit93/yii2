<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workflow_task".
 *
 * @property integer $workflow_task_id
 * @property integer $workflow_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property integer $estimated_time
 * @property integer $operating_time
 * @property string $regist_date
 * @property string $update_date
 * @property integer $del_chk
 *
 * @property Workflow $workflow
 */
class WorkflowTask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workflow_task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['workflow_id', 'name', 'regist_date', 'update_date', 'del_chk'], 'required'],
            [['workflow_id', 'estimated_time', 'operating_time', 'del_chk'], 'integer'],
            [['start_date', 'end_date', 'regist_date', 'update_date'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'workflow_task_id' => 'Workflow Task ID',
            'workflow_id' => 'Workflow ID',
            'name' => 'Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'estimated_time' => 'Estimated Time',
            'operating_time' => 'Operating Time',
            'regist_date' => 'Regist Date',
            'update_date' => 'Update Date',
            'del_chk' => 'Del Chk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkflow()
    {
        return $this->hasOne(Workflow::className(), ['workflow_id' => 'workflow_id']);
    }
}
