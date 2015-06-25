<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workflow".
 *
 * @property integer $workflow_id
 * @property string $name
 * @property string $regist_date
 * @property string $update_date
 * @property integer $del_chk
 *
 * @property WorkflowSetting[] $workflowSettings
 * @property WorkflowTask[] $workflowTasks
 */
class Workflow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workflow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regist_date', 'update_date', 'del_chk'], 'required'],
            [['regist_date', 'update_date'], 'safe'],
            [['del_chk'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'workflow_id' => 'Workflow ID',
            'name' => 'Name',
            'regist_date' => 'Regist Date',
            'update_date' => 'Update Date',
            'del_chk' => 'Del Chk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkflowSettings()
    {
        return $this->hasMany(WorkflowSetting::className(), ['workflow_id' => 'workflow_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkflowTasks()
    {
        return $this->hasMany(WorkflowTask::className(), ['workflow_id' => 'workflow_id']);
    }
}
