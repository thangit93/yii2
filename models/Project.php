<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $project_id
 * @property integer $project_type_id
 * @property string $name
 * @property string $regist_date
 * @property string $update_date
 * @property integer $del_chk
 */
class Project extends \yii\db\ActiveRecord
{
    public $workflow_id;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'regist_date', 'update_date', 'workflow_id'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'name' => 'タイトル',
            'create_user_id' => '作成者',
            'regist_date' => '登録日時',
            'update_date' => '更新日時',
        ];
    }

    public function afterSave($insert, $changed)
    {
        if ($insert) {
            foreach (WorkflowTask::findAll(['workflow_id' => $this->workflow_id]) as $orig) {
                $task = new Task();
                $skips = ['workflow_task_id','workflow_id','regist_date','update_date'];
                foreach (Task::getTableSchema()->columnNames as $cols) {
                    if(in_array($cols, $skips))continue;
                    $task->{$cols} = $orig->{$cols};
                }
                $task->user_id = Yii::$app->user->id;
                $task->project_id = $this->project_id;
                $task->save();
            }
        }

        parent::afterSave($insert, $changed);
    }
}
