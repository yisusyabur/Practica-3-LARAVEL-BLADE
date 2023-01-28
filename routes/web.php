<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\AlumnosController;

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
/* Route::get('/saludo', function () {
    return view('hola');
});
Route::get('/prueba', function () {
    return view('probando');
}); */

/* $masters = [
['name' => 'Sergio Panti'],
['name' => 'Rafael Yabur'],
['name' => 'Raymundo Romero'],
['name' => 'Maria ignot'],
]; */

Route::view('/saludox', 'hola') ->name('saludo');
Route::view('prueba', 'probando');
Route::view('normal', 'normal');
Route::view('contacto', 'contacto');


/* Route::view('/maestros', 'maestros', ['masters' => $masters]) ->name('masters'); */
/* Route::view('/maestros', 'maestros', compact('masters')) ->name('masters');
 */

 Route::get('/maestros', MaestrosController::class)->name('masters');
 Route::get('/alumnos', [AlumnosController::class,'index'])->name('students');

 


