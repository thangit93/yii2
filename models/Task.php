<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $task_id
 * @property integer $project_id
 * @property integer $user_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property integer $estimated_time
 * @property integer $operating_time
 * @property string $regist_date
 * @property string $update_date
 * @property integer $del_chk
 *
 * @property Project $project
 * @property User $user
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'user_id', 'name'], 'required'],
            [['project_id', 'user_id', 'estimated_time', 'operating_time', 'del_chk'], 'integer'],
            [['start_date', 'end_date', 'regist_date', 'update_date'], 'safe'   ],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'project_id' => 'Project ID',
            'user_id' => 'User ID',
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
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['project_id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
