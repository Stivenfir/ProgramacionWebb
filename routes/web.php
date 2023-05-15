<?php

use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('cursos',CursosController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [CursosController::class, 'index'])->name('home');



Route::group(['middleware'=>'auth'], function(){
 
    Route::get('/home', [CursosController::class, 'index'])->name('home');
    Route::get('/consulta', [CursosController::class, 'consulta'])->name('consulta');
    Route::get('/rosas', [CursosController::class, 'rosas'])->name('cumpleaños');
    Route::get('/sueldo', [CursosController::class, 'salario'])->name('salario');
    Route::get('/nomina', [CursosController::class, 'nomina'])->name('nomina');
   
});





