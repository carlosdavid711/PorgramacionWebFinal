<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class);

Route::resource('maestros', App\Http\Controllers\MaestrosController::class);

Route::resource('cursos', App\Http\Controllers\CursoController::class);

Route::resource('padres', App\Http\Controllers\PadresController::class);

Route::resource('gestionNotas', App\Http\Controllers\Gestion_notasController::class);

Route::resource('asignacionCursos', App\Http\Controllers\Asignacion_cursosController::class);

Route::resource('reportes', App\Http\Controllers\ReportesController::class);