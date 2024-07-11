<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

//Listar las marcas
Route::get('/marcas', [MarcaController::class, 'index']);

//Listar los modelos
Route::get('/modelos', [ModeloController::class, 'index']);
//Listar los modelos de una marca
Route::get('/modelos/marca/{marca_id}', [ModeloController::class, 'obtenerModelosSegunMarca']);

//Listar los dispositivos
Route::get('/dispositivos', [DispositivoController::class, 'index']);
//Listar los dispositivos segun modelo
Route::get('/dispositivos/modelo/{modelo_id}', [DispositivoController::class, 'obtenerDispositivosSegunModelo']);
//Listar los dispositivos segun marca
Route::get('/dispositivos/marca/{marca_id}', [DispositivoController::class, 'obtenerDispositivosSegunMarca']);
//Listar los dispositivos segun bodega
Route::get('/dispositivos/bodega/{bodega_id}', [DispositivoController::class, 'obtenerDispositivosSegunBodega']);

//Listar las bodegas
Route::get('/bodegas', [BodegaController::class, 'index']);