<?php

use yii\db\Schema;
use yii\db\Migration;

class m150625_175624_create_workflow_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('workflow', [
            'workflow_id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);

        $this->createTable('workflow_task', [
            'workflow_task_id' => Schema::TYPE_PK,
            'workflow_id' => Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (workflow_id) references workflow(workflow_id)\'',
            'name' => Schema::TYPE_STRING. ' NOT NULL',
            'start_date' => Schema::TYPE_DATETIME,
            'end_date' => Schema::TYPE_DATETIME,
            'estimated_time' => Schema::TYPE_INTEGER,
            'operating_time' => Schema::TYPE_INTEGER,
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);

        $this->dropColumn('project', 'project_type_id');
        $this->dropColumn('workflow_setting', 'project_id');
        $this->addColumn('workflow_setting', 'workflow_id', Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (workflow_id) references workflow(workflow_id)\'');

    }

    public function safeDown()
    {
        $this->dropTable('workflow');
        $this->dropTable('workflow_task');
        $this->addColumn('project', 'project_type_id', Schema::TYPE_INTEGER. ' NOT NULL');
        $this->addColumn('workflow_setting', 'project_id', Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (project_id) references project(project_id)\'');
        $this->dropColumn('workflow_setting', 'workflow_id');
    }
}
