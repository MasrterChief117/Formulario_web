<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ObjetoController;

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
//a continuacion las rutas que se encargan de navegar entre las diferentes views
Route::view('/', 'home')->name('home');
Route::view('buscador', 'buscador')->name('buscador');
Route::view('registroO', 'registro_objeto')->name('registro_objeto');
Route::view('registroD', 'registro_dependencia')->name('registro_dependencia');
Route::view('registroM', 'registro_marca')->name('registro_marca');
Route::view('registroT', 'registro_tipo')->name('registro_tipo');
Route::view('registroU', 'registro_ubicacion')->name('registro_ubicacion');
Route::view('registroP', 'registro_persona')->name('registro_persona');

//a continuacion las rutas que recibiran la informacion de los formularios de registro
//ruta que se encargara de recibir la informacion desde el formulario registro_objeto
//Route::post('ubicacion', [UbicacionController::class, 'store'])->name('ubicacion.store');
Route::post('marca', [MarcaController::class, 'store'])->name('marca.store');
Route::post('tipo', [TipoController::class, 'store'])->name('tipo.store');
Route::post('dependencia', [DependenciaController::class, 'store'])->name('dependencia.store');
Route::post('ubicacion', [UbicacionController::class, 'store'])->name('ubicacion.store');
Route::post('persona', [PersonaController::class, 'store'])->name('persona.store');
//rutas para tablas que si necesitan conecion de llave foranea 
Route::post('objeto', [ObjetoController::class, 'store'])->name('objeto.store');

