<?php

namespace Database\Seeders;

use App\Models\CastType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CastTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CastType::firstOrCreate([
            'name'=>'Actor'
        ]);
        CastType::firstOrCreate([
            'name'=>'Director'
        ]);
    }
}
