<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('components.landingPage.landing');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);
Route::view('/admin', 'components.admin.panel');
Route::view('/registro-visitante', 'components.forms.registroUser');
Route::view('/login', 'components.forms.login');
Route::view('/calificacion', 'components.forms.calificaionStands');
Route::post('/guardar-evaluacion', [EvaluacionController::class, 'guardar'])->name('guardar_evaluacion');
Route::view('/registro-stand', 'components.forms.registroStands');


Route::get('/stand', function () {
    // Simulando la obtención de datos desde la base de datos
    $stands = [
        (object) [
            'photo_url' => 'https://placekitten.com/300/200',
            'company_name' => 'Empresa 1',
            'address' => 'Dirección Empresa 1',
            'phone_number' => '123-456-789',
            'description' => 'Discurso oral o escrito en el que se explica cómo es una cosa, una persona o un lugar para ofrecer una imagen o una idea completa de ellos.
            "en la primera versión de la novela aparecen dilatadas descripciones acerca de la mala vida de la ciudad"1',
            'website_url' => 'https://www.empresa1.com',
        ],
    ];

    return view('components.usuarios.standsIbfo', compact('stands'));
});

Route::get('/user', function () {
    // Simulando la obtención de datos desde la base de datos
    $stands = [
        (object) [
            'photo_url' => 'https://placekitten.com/300/200',
            'company_name' => 'Empresa 1',
            'address' => 'Dirección Empresa 1',
            'phone_number' => '123-456-789',
            'description' => 'Discurso oral o escrito en el que se explica cómo es una cosa, una persona o un lugar para ofrecer una imagen o una idea completa de ellos. "en la primera versión de la novela aparecen dilatadas descripciones acerca de la mala vida de la ciudad"1',
            'website_url' => 'https://www.empresa1.com',
            'visited' => true, 

        ],
        (object) [
            'photo_url' => 'https://placekitten.com/300/205',
            'company_name' => 'Empresa 2',
            'address' => 'Dirección Empresa 2',
            'phone_number' => '987-654-321',
            'description' => 'Otra descripción interesante.',
            'website_url' => 'https://www.empresa2.com',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/300/202',
            'company_name' => 'Empresa 1',
            'address' => 'Dirección Empresa 1',
            'phone_number' => '123-456-789',
            'description' => 'Discurso oral o escrito en el que se explica cómo es una cosa, una persona o un lugar para ofrecer una imagen o una idea completa de ellos. "en la primera versión de la novela aparecen dilatadas descripciones acerca de la mala vida de la ciudad"1',
            'website_url' => 'https://www.empresa1.com',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/300/201',
            'company_name' => 'Empresa 2',
            'address' => 'Dirección Empresa 2',
            'phone_number' => '987-654-321',
            'description' => 'Otra descripción interesante.',
            'website_url' => 'https://www.empresa2.com',
        ],
    ];

    return view('components.usuarios.homeUser', compact('stands'));
});