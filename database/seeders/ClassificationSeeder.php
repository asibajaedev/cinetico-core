<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classification::firstOrCreate([
            'name' => 'TP',
            'description' => 'General o Todo Público'
        ]);
        Classification::firstOrCreate([
            'name' => 'TPA',
            'description' => 'Todo Público, se recomienda orientación de los padres'
        ]);
        Classification::firstOrCreate([
            'name' => 'TP7',
            'description' => 'Todo público, niños menores de 7 acompañados de un adulto'
        ]);
        Classification::firstOrCreate([
            'name' => 'M12',
            'description' => 'Mayores de 12 años'
        ]);
        Classification::firstOrCreate([
            'name' => 'M15',
            'description' => 'Mayores de 15 años'
        ]);
        Classification::firstOrCreate([
            'name' => 'M18',
            'description' => 'Mayores de 18 años'
        ]);
    }
}
