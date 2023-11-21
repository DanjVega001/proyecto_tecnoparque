<?php

namespace Database\Seeders;

use App\Models\Criterio;
use Illuminate\Database\Seeder;

class CriterioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criterio::create(['name' => 'Impacto Visual']);
        Criterio::create(['name' => 'Ecología']);
        Criterio::create(['name' => 'Innovación']);
    }
}
