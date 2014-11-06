<?php

class m141106_204917_new_snippets_table extends CDbMigration
{

    public function safeUp()
    {
        $this->createTable('o_snippet', array(
                'id' => 'pk',
                'code_title' => 'string not null',
                'code_snippet' => 'text not null'
            ),
            'engine = innodb character set = utf8 '
        );
    }

    public function safeDown()
	{
        $this->dropTable('o_snippet');
	}

}