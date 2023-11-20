<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'id' => 1,
            'name'=> "Administrador"
        ]);
        Rol::create([
            'id' => 2,
            'name'=> "Visitante"
            ]);
            
        Rol::create([
            'id' => 3,
            'name'=> "Empresa"
            ]);
    }
}
