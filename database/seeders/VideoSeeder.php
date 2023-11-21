<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //C:\adso_git\proyecto_tecnoparque\proyectoTpc\public\multimedia\videos
        $localVideoPath = public_path('\multimedia\videos\Animación_sello_gif.gif');


        // Almacena el video en el sistema de archivos de Laravel
        $videoPath = Storage::putFile('videos', $localVideoPath, 'public');

        // Output para informar sobre la ruta del video almacenado
        $this->command->info('Video almacenado en: ' . Storage::url($videoPath));
    }
}
