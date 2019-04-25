<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'usertype' => 'admin',
            'description' => 'Administrator'
        ]);
        DB::table('roles')->insert([
            'usertype' => 'restaurant',
            'description' => 'Restaurant operator'
        ]);
        DB::table('roles')->insert([
            'usertype' => 'customer',
            'description' => 'Public user'
        ]);
    }
}
