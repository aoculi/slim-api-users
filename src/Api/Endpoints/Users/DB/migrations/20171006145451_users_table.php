<?php

use Phinx\Migration\AbstractMigration;

class UsersTable extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
            ->addColumn('username', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('avatar_url', 'string', ['null' => true])
            ->addColumn('bio', 'text', ['null' => true])
            ->addColumn('website', 'string', ['null' => true])
            ->addColumn('location', 'string', ['null' => true])
            ->addColumn('active', 'boolean', ['default' => false])
            ->addColumn('activated_at', 'datetime', ['null' => true])
            ->addColumn('updated_at', 'datetime')
            ->addColumn('created_at', 'datetime')
            ->create();
    }
}