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
                'title' => '2番目値',
                'description' => '2番目値',
                'body' => '2番目値',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [            
                'title' => 'テスト値',
                'description' => 'テスト値',
                'body' => 'テスト値',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [            
                'title' => '３番目値',
                'description' => '３番目値',
                'body' => '３番目値',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [            
                'title' => '５番目値',
                'description' => '５番目値',
                'body' => '５番目値',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ]
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
