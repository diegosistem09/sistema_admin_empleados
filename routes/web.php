<?php

use Illuminate\Support\Facades\Route;

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



#Route::resource('/empleado',[EmpleadoController::class]);
Route::resource('empleado', App\Http\Controllers\EmpleadoController::class);


Route::get('pais',[App\Http\Controllers\EmpleadoController::class,'pais']);
Route::get('ciudad/{id}',[App\Http\Controllers\EmpleadoController::class,'ciudad']);


