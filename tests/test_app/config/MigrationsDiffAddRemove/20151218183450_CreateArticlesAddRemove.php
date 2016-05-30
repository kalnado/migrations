<?php
use Migrations\AbstractMigration;

class CreateArticlesAddRemove extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('articles');
        $table
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('excerpt', 'text', [
                'default' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('articles');
    }
}
