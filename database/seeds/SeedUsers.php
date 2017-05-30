<?php

use Phinx\Seed\AbstractSeed;

class SeedUsers extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 100; $i++)
        {
            $data[] = [
                'user_id' => 'sample_user_id' . $i,
                'email' => 'sample_email' . $i . '@example.com',
                'password' => 'sample',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $this->table('users')
             ->insert($data)
             ->save();
    }
}
