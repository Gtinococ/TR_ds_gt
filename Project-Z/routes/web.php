<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogrosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\NoticiasController;


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

//JUEGO y sus subapartados
Route::get('/juego', function () {
    return view('/JUEGO/juego');
})->middleware(['auth'])->name('juego');
Route::get('/juego/mapas',[MapsController::class, 'index'])->middleware(['auth'])->name('mapas');
Route::get('/juego/logros',[LogrosController::class, 'index'])->middleware(['auth'])->name('logros');




//ASPECTOS y sus subapartados
Route::get('/historia', function () {
    return view('/HISTORIA/historia');
})->middleware(['auth'])->name('historia');
Route::get('/armas',[WeaponController::class, 'index'])->middleware(['auth'])->name('armas');
Route::get('/historia/personajes',[CharacterController::class, 'index'])->middleware(['auth'])->name('person');




//NOTICIAS y sus subapartados
Route::get('/noticias',[NoticiasController::class, 'index'])->middleware(['auth'])->name('noticias');
Route::get('/noticias/notas-del-parche', function () {
    return view('/NOTICIAS/notas');
})->middleware(['auth'])->name('notas');



//ABOUTUS y sus subapartados
Route::get('/aboutus', function () {
    return view('/ABOUTUS/aboutus');
})->middleware(['auth'])->name('aboutus');


//PERFIL USUARIO
Route::get('/perfil',[UserController::class, 'index'])->middleware(['auth'])->name('perfil');
Route::get('/perfil/{id}',[UserController::class, 'destroy'])->middleware(['auth'])->name('destroy');
Route::get('perfil/edit/{id}',[UserController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('perfil/update/{id}',[UserController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('perfil/upload/{id}',[UserController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('perfil/image/{id}',[UserController::class, 'store'])->middleware(['auth'])->name('image');






require __DIR__.'/auth.php';
