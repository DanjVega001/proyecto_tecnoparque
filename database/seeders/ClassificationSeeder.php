<?php

namespace Database\Seeders;

use App\Models\Classification;
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
        Classification::create(['name' => 'Moda Sostenible']);
        Classification::create(['name' => 'Proyecto ITO']);
        Classification::create(['name' => 'Gastronomia']);
        Classification::create(['name' => 'Construcción']);
        Classification::create(['name' => 'Biotecnlogía - Bioeconomía']);
        Classification::create(['name' => 'Agroinudstria']);
        Classification::create(['name' => 'Economía Popular']);
        Classification::create(['name' => 'Otras']);
    }
}
