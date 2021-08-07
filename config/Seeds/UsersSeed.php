<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => '$2y$10$r.v/iihO7T0DByxoDE3.LerWgOiZKnkA5I8rW7bDtlJ4Wm6hncNke',
                'created' => '2021-08-07 14:17:54',
                'modified' => '2021-08-07 08:52:18',
            ],
            [
                'id' => '2',
                'email' => 'admin1@example.com',
                'username' => 'admin1',
                'password' => '$2y$10$T0c8qrYXvue3Fas1rZlK7eHaFrG7c.fdW5w7gisYpnQeeI4z6WGNW',
                'created' => '2021-08-07 08:51:49',
                'modified' => '2021-08-07 08:51:49',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
