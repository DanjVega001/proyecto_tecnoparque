<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);
Route::view('/admin', 'components.admin.panel');
Route::view('/user', 'components.usuarios.homeUser');
Route::view('/registro-visitante', 'components.forms.registroUser');
Route::view('/login', 'components.forms.login');
Route::view('/calificacion', 'components.forms.calificaionStands');
Route::post('/guardar-evaluacion', [EvaluacionController::class, 'guardar'])->name('guardar_evaluacion');
Route::view('/registro-stand', 'components.forms.registroStands');
Route::view('/landing_page', 'components.landingPage.landing');

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
