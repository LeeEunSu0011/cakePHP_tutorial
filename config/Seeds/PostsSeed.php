<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
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
                'title' => '初期値',
                'description' => '初期値',
                'body' => '初期値',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [            
                'title' => '初期値',
                'description' => '初期値',
                'body' => '初期値',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ]
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
