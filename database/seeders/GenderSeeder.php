<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'name' => 'Action',
        ]);
        DB::table('genders')->insert([
            'name' => 'Adventure',
        ]);
        DB::table('genders')->insert([
            'name' => 'Comedy',
        ]);
        DB::table('genders')->insert([
            'name' => 'Drama',
        ]);
        DB::table('genders')->insert([
            'name' => 'Musical',
        ]);
        DB::table('genders')->insert([
            'name' => 'Non-fiction',
        ]);
    }
}
