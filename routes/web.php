<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);

Route::view('/registro-visitante', 'components.forms.registroUser');
Route::view('/login', 'components.forms.login');
Route::view('/calificacion', 'components.forms.calificaionStands');
Route::post('/guardar-evaluacion', [EvaluacionController::class, 'guardar'])->name('guardar_evaluacion');





// Ruta de prueba para visualizar las tarjetas
Route::get('/landing_page', function () {
    // Simulando la obtención de datos desde la base de datos
    $stands = [
        (object) [
            'photo_url' => 'https://placekitten.com/300/200',
            'company_name' => 'Empresa 1',
            'description' => 'Descripción de la Empresa 1',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/301/200',
            'company_name' => 'Empresa 2',
            'description' => 'Descripción de la Empresa 2',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/302/200',
            'company_name' => 'Empresa 3',
            'description' => 'Descripción de la Empresa 3',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/303/200',
            'company_name' => 'Empresa 4',
            'description' => 'Descripción de la Empresa 4',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/304/200',
            'company_name' => 'Empresa 5',
            'description' => 'Descripción de la Empresa 5',
        ],
        (object) [
            'photo_url' => 'https://placekitten.com/304/200',
            'company_name' => 'Empresa 5',
            'description' => 'Descripción de la Empresa 5',
        ],
    ];

    return view('components.landingPage.landing', compact('stands'));
});

