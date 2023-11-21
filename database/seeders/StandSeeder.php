<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stand;


class StandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Stand::create([
            'id' => 1,
            'name'=> "Bavaria",
            'logo'=>"https://neucaribe.com/wp-content/uploads/2016/07/bavaria-logo.png",
            'banner'=>"https://www.bavaria.co/sites/g/files/phfypu1316/f/201802/Banner-Bavaria-2.jpg",
            'description'=> "Bavaria S.A.S",
            'facebook'=> "N/A",
            'instagram'=> "N/A",
            'tiktok'=> "N/A",
            'web'=> "https://www.bavaria.co/",
            'calificacion'=> 0.0,
            'qr'=> "Bavaria",
        ]);
        //INSERT INTO `passports`(`id`, `date`, `stand_id`, `user_id`) VALUES ('1','2023-11-20 10:13:00','1','2') Para Crear un passport

    }
}
