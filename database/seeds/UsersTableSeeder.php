<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@a.a',
                'password' => bcrypt(123123)
            ],
        ];

        DB::table('users')->insert($users);
    }
}
