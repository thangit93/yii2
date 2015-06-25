<?php

use yii\db\Schema;
use yii\db\Migration;

class m150623_052441_create_initialize_tables extends Migration
{
    public function safeUp()
    {
        $this->createTable('user', [
            'user_id' => Schema::TYPE_PK,
            'auth_key' => Schema::TYPE_STRING,
            'is_admin' => Schema::TYPE_BOOLEAN,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'first_name' => Schema::TYPE_STRING . ' NOT NULL',
            'last_name' => Schema::TYPE_STRING . ' NOT NULL',
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);

        $this->insert('user', [
            'user_id' => '1',
            'auth_key' => '1',
            'is_admin' => '1',
            'username' => 'r0317k0226@gmail.com',
            'email' => 'r0317k0226@gmail.com',
            'password' => 'tpiXGnS.',
            'first_name' => 'Ryosuke',
            'last_name' => 'Murai',
            'regist_date' => '2015-06-22 00:00:00',
            'update_date' => '2015-06-22 00:00:00',
            'del_chk' => '0'
        ]);
        
        $this->createTable('login_log', [
            'login_log_id' => Schema::TYPE_PK,
            'input_id' => Schema::TYPE_STRING,
            'result' => Schema::TYPE_INTEGER,
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]); 

        $this->createTable('project', [
            'project_id' => Schema::TYPE_PK,
            'project_type_id' => Schema::TYPE_INTEGER. ' NOT NULL',
            'create_user_id' => Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (create_user_id) references user(user_id)\'',
            'name' => Schema::TYPE_STRING. ' NOT NULL',
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);
        
        $this->createTable('task', [
            'task_id' => Schema::TYPE_PK,
            'project_id' => Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (project_id) references project(project_id)\'',
            'user_id' => Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (user_id) references user(user_id)\'',
            'name' => Schema::TYPE_STRING. ' NOT NULL',
            'start_date' => Schema::TYPE_DATETIME,
            'end_date' => Schema::TYPE_DATETIME,
            'estimated_time' => Schema::TYPE_INTEGER,
            'operating_time' => Schema::TYPE_INTEGER,
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);
        
        $this->createTable('workflow_setting', [
            'workflow_setting_id' => Schema::TYPE_PK,
            'project_id' => Schema::TYPE_INTEGER. ' NOT NULL COMMENT \'Foreign Key (project_id) references project(project_id)\'',
            'repeat_setting' => Schema::TYPE_INTEGER,
            'regist_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'update_date' => Schema::TYPE_DATETIME . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
        $this->dropTable('login_log');
        $this->dropTable('project');
        $this->dropTable('task');
        $this->dropTable('workflow_setting');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
   }
    
    public function safeDown()
    {
    }
    */
}
