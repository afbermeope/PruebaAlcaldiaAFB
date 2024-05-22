<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;

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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    //Rutas get
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/account-sign-out', [UserController::class, 'getSignOut']);
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile.index');
    Route::get('/editarDepartamentoAjax/{id}', [DepartamentoController::class, 'edit']);
    Route::get('/editarEmpleadoAjax/{id}', [EmpleadoController::class, 'edit']);

    //Rutas resource
    Route::resource('user', UserController::class);
    Route::resource('departamento', DepartamentoController::class)->name('index', 'departamento.index');
    Route::resource('empleado', EmpleadoController::class)->name('index', 'empleado.index');

    Route::post('/departamento/borrar', [DepartamentoController::class, 'delete'])->name('departamento.borrar');

    
});
