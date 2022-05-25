<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DispositivoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resources([
    
    'usuario'        => UsuarioCorridaController::class,
    'dispositivo'        => DispositivoController::class
]);

// Route::get('usuarios/datatable',  [UsuarioController::class , 'datatable']);
Route::get('dispositivos/datatable',  [UsuarioController::class , 'datatable']);
Route::get('/', function () {
    return view('welcome');
});

//  Auth::routes();

// Route::get('/home', [App\Http\Controllers\UsuarioController::class, 'index'])->name('home');
 Route::get('/home', [App\Http\Controllers\DispositivoController::class, 'index'])->name('home');
