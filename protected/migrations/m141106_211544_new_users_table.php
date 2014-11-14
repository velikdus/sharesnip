<?php

class m141106_211544_new_users_table extends CDbMigration
{

    public function safeUp()
    {
        $this->createTable('o_users', array(
                'id' => 'pk',
                'username' => 'string not null',
                'crypted_password' => 'string not null',
                'email' => 'string not null',
                'salt' => 'string not null'
            ),
            'engine = innodb character set = utf8'
        );
    }

    public function safeDown()
    {
        $this->dropTable('o_users');
    }

}