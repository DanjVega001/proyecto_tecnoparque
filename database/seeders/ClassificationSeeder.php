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
        Classification::create(['name' => 'tecnologia']);
        Classification::create(['name' => 'moda']);
        Classification::create(['name' => 'turismo']);
    }
}
