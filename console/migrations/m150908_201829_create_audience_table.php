<?php

use yii\db\Schema;
use yii\db\Migration;

class m150908_201829_create_audience_table extends Migration
{
    public function up()
    {
        $this->createTable('audience', [
            'id'=> \yii\db\mssql\Schema::TYPE_PK,
            'first_name' => \yii\db\mssql\Schema::TYPE_STRING . ' NOT NULL',
            'last_name' => \yii\db\mssql\Schema::TYPE_STRING . ' NOT NULL', 
            'email' => \yii\db\mssql\Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('audience');
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
