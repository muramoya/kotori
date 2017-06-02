<?php

use KTRLib\DevTools\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    public function change()
    {
        $this->tableName('users');
        $this->string('user_id')->unique()->add();
        $this->string('email')->unique()->add();
        $this->string('password')->add();
        $this->softdelete();
        $this->timestampable();
        $this->create();
    }
}
