<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Schedule;


class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'id' => 1,
            'weekday'=> "Lunes",
            'hour_start'=>'10:00:00',
            'hour_end'=>'20:00:00',
        ]);
        Schedule::create([
            'id' => 2,
            'weekday'=> "Martes",
            'hour_start'=>'10:00:00',
            'hour_end'=>'20:00:00',
        ]);
        Schedule::create([
            'id' => 3,
            'weekday'=> "Miercoles",
            'hour_start'=>'10:00:00',
            'hour_end'=>'20:00:00',
        ]);
        Schedule::create([
            'id' => 4,
            'weekday'=> "Jueves",
            'hour_start'=>'10:00:00',
            'hour_end'=>'20:00:00',
        ]);
        Schedule::create([
            'id' => 5,
            'weekday'=> "Viernes",
            'hour_start'=>'10:00:00',
            'hour_end'=>'21:00:00',
        ]);
        Schedule::create([
            'id' => 6,
            'weekday'=> "Sabado",
            'hour_start'=>'10:00:00',
            'hour_end'=>'21:00:00',
        ]);
        Schedule::create([
            'id' => 7,
            'weekday'=> "Domingo",
            'hour_start'=>'10:00:00',
            'hour_end'=>'20:00:00',
        ]);
    }
}
