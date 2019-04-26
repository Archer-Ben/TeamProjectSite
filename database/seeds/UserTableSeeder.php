<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test_user1',
            'email' => 'test_user1@test.com',
            'password' => bcrypt('test_user1')
        ]);
        DB::table('users')->insert([
            'name' => 'test_user2',
            'email' => 'test_user2@test.com',
            'password' => bcrypt('test_user2')
        ]);
    }
}
