     <?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EvaluationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StandController;



use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// RUTAS PROTEGIDAS PARA EL VISITANTE
Route::middleware(['auth', 'role:Visitante'])->group(function () {

    // Muestra la evaluacion 
    Route::get('/evaluation/index/{qr_code}', [EvaluationController::class, 
    'index'])->name('evaluation.index');

    // Guarda el resultado de la evaluacion
    Route::post('/evaluation/store/{qr_code}', [EvaluationController::class, 
    'store'])->name('evaluation.store');
    
});

// RUTAS PROTEGIDAS PARA EL ADMIN
Route::middleware(['auth', 'role:Administrador'])->group(function () {
    Route::resource('empresa', EmpresaController::class);
});


// RUTAS PROTEGIDAS PARA LA EMPRESA
Route::middleware(['auth', 'role:Stands'])->group(function () {
    Route::resource('stand', StandController::class);
});

//CRUD de visitante
Route::resource('user',UserController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
