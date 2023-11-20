<?php

namespace Database\Seeders;
use App\Models\Schedule;

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule=Schedule::create([
            'id'=>1,
            'hour_start'=>'10:00:00',
            'hour_end'=>'21:00:00',
            'day'=>'2023-11-30',
        ]);
        $schedule=Schedule::create([
            'id'=>2,
            'hour_start'=>'09:00:00',
            'hour_end'=>'21:00:00',
            'day'=>'2023-11-29',
        ]);
    }
}
