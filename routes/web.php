<?php

use App\Http\Controllers\CultivoController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\MayordomoController;
use App\Http\Controllers\RecolectaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación protegidas por el middleware centralizado
Auth::routes(['middleware' => 'role.redirect']);

// Rutas protegidas por roles
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:trabajador'])->group(function () {
    Route::get('/trabajador', function () {
        return view('trabajador.dashboard');
    })->name('trabajador.dashboard');
});

Route::middleware(['auth', 'role:mayordomo'])->group(function () {
    Route::get('/mayordomo', function () {
        return view('mayordomo.dashboard');
    })->name('mayordomo.dashboard');
});


Route::get('/Listac', [CultivoController::class, 'index'])->name('cultivos.index');
Route::get('/Cultivos/Formcultivos/create', [CultivoController::class, 'create'])->name('cultivos.create');
Route::post('/Cultivos/Formcultivos/store', [CultivoController::class, 'store'])->name('cultivos.store');
Route::put('/Cultivos/Formcultivos/update/{id}', [CultivoController::class, 'update'])->name('cultivos.update');
Route::get('/Cultivos/Formcultivos/edit/{id}', [CultivoController::class, 'edit'])->name('cultivos.edit');
Route::get('/Cultivos/Formcultivos/{id}', [CultivoController::class, 'destroy'])->name('cultivos.destroy');


Route::get('/herramientas',[HerramientaController::class, 'index'])->name('herramientas.index');
Route::get('/herramientas/create',[HerramientaController::class, 'create'])->name('herramientas.create');
Route::post('/herramientas/store',[HerramientaController::class, 'store'])->name('herramientas.store');
Route::put('/herramientas/update/{id}',[HerramientaController::class, 'update'])->name('herramientas.update');
Route::get('/herramientas/edit/{id}',[HerramientaController::class, 'edit'])->name('herramientas.edit');
Route::get('/herramientas/destroy/{id}',[HerramientaController::class, 'destroy'])->name('herramientas.destroy');


Route::get('/insumos',[InsumoController::class, 'index'])->name('insumo.index');
Route::get('/insumos/create',[InsumoController::class, 'create'])->name('insumo.create');
Route::post('/insumos/store',[InsumoController::class, 'store'])->name('insumo.store');
Route::put('/insumos/update/{id}',[InsumoController::class, 'update'])->name('insumo.update');
Route::get('/insumos/edit/{id}',[InsumoController::class, 'edit'])->name('insumo.edit');
Route::get('/insumos/destroy/{id}',[InsumoController::class, 'destroy'])->name('insumo.destroy');


Route::get('/register-mayordomo/showFrom',[MayordomoController::class,'showForm'])->name('register.mayordomo.form');
Route::post('/register-mayordomo/register',[MayordomoController::class,'register'])->name('register.mayordomo');


Route::get('recolecta/create', [RecolectaController::class, 'create'])->name('recolecta.create');
Route::post('recolecta/store', [RecolectaController::class, 'store'])->name('recolecta.store');