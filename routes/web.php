<?php


//namespace App\Http\Controllers;

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EquipoRepuestoController;
use App\Http\Controllers\SearchRepuestosController;
use App\Http\Controllers\ImagenController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FotoController;
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

Route::get('/', InicioController::class)->name('home');

Route::view('nosotros','nosotros')->name('nosotros');
Route::view('contactanos','contactanos')->name('contactanos');

Route::resource('equipos', EquipoController::class);
//Route::get('equipos/{equipo}/showphoto', [EquipoController::class, 'showphoto'])->name('equipos.showphoto');

Route::delete('/equipos/{equipo}/borrar', [EquipoController::class, 'destroy'])->name('equipos.destroy');
Route::resource('equipoRepuesto', EquipoRepuestoController::class);
Route::get('search/repuestos', [SearchRepuestosController::class,'repuestos'])->name('search.repuestos');

Route::resource('fotos', FotoController::class);
Route::get('fotos/{equipo}', [EquipoController::class, 'show'])->name('fotos.show');


//route::post('imagen/store', [ImagenController::class,'store'])->name('imagen.store');


//Route::get('/', function () {
  //  return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
