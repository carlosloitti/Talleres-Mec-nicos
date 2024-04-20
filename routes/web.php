<?php

use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    
});

Route::get('/vehiculos' , [VehiculoController::class, 'index'])->name('vehiculos.index');
Route::post('/vehiculos' , [VehiculoController::class, 'store'])->name('vehiculos.store');
Route::get('/vehiculos/create' , [VehiculoController::class, 'create'])->name('vehiculos.create');
Route::delete('/vehiculos/{vehiculo}' , [VehiculoController::class, 'destroy'])->name('vehiculos.destroy');
Route::put('/vehiculos/{vehiculo}' , [VehiculoController::class, 'update'])->name('vehiculos.update');
Route::get('/vehiculos/{vehiculo}/edit' , [VehiculoController::class, 'edit'])->name('vehiculos.edit');


Route::get('/propietarios' , [PropietarioController::class, 'index'])->name('propietarios.index');
Route::post('/propietarios' , [PropietarioController::class, 'store'])->name('propietarios.store');
Route::get('/propietarios/create' , [PropietarioController::class, 'create'])->name('propietarios.create');
Route::delete('/propietarios/{propietario}' , [PropietarioController::class, 'destroy'])->name('propietarios.destroy');
Route::put('/propietarios/{propietario}' , [PropietarioController::class, 'update'])->name('propietarios.update');
Route::get('/propietarios/{propietario}/edit' , [PropietarioController::class, 'edit'])->name('propietarios.edit');


Route::get('/servicios' , [ServicioController::class, 'index'])->name('servicios.index');
Route::post('/servicios' , [ServicioController::class, 'store'])->name('servicios.store');
Route::get('/servicios/create' , [ServicioController::class, 'create'])->name('servicios.create');
Route::delete('/servicios/{servicio}' , [VehiculoController::class, 'destroy'])->name('servicios.destroy');


