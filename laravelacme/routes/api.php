<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listarvehiculos', [App\Http\Controllers\VehiculoController::class ,'listar']);
Route::get('/listarusuarios', [App\Http\Controllers\UsuarioController::class ,'listar']);
Route::post('/registrausuarios', [App\Http\Controllers\UsuarioController::class ,'store']);
Route::get('/mostrar/{id}', [App\Http\Controllers\UsuarioController::class ,'show']);
Route::post('/actualizarUsers/{id}', [App\Http\Controllers\UsuarioController::class ,'update']);
Route::get('/usuariostipos', [App\Http\Controllers\VehiculoController::class ,'tipousuario']);
Route::post('/registrovehiculo', [App\Http\Controllers\VehiculoController::class ,'store']);
Route::get('/showvehiculos/{id}', [App\Http\Controllers\VehiculoController::class ,'show']);
Route::post('/actualizarVehiculos/{id}', [App\Http\Controllers\VehiculoController::class ,'updateVehiculo']);
