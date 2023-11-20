     <?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\PassportController;


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


Route::get('/', function () {
    return view('welcome');
});

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
Route::middleware(['auth', 'role:Empresa'])->group(function () {
    Route::resource('stand', StandController::class);
});

    // Guarda el resultado de la evaluacion
    Route::post('/evaluation/store/{qr_code}', [EvaluationController::class, 
    'store'])->name('evaluation.store');
    


//CRUD de visitante
Route::resource('user',UserController::class);


Route::resource('places',PlacesController::class);
Route::resource('passport',PassportController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
