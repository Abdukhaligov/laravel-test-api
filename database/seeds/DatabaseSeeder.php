<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        factory(\App\User::class, 2)->create();
        factory(\App\Blog\Post::class, 10)->create();
        factory(\App\Product::class, 5)->create();
    }
}
