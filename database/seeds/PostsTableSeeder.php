<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            [
                "title" => "Some title",
                "text" => "Some text",
                "author_id" => 1
            ]
        ];

        DB::table('posts')->insert($posts);
    }
}
