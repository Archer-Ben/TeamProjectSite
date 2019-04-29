<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => '',
            'description' => 'Fine dining in the heart of Paris. 2 Michelin stars.',
            'location' => '12 Rue Davioud, Paris',
            'latitude' => 48.855938,
            'longitude' => 2.271363,
            'phone_number' => '22222 333333',
            'max_table_size' => 6
        ]);
    }
}
