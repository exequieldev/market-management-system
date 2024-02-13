<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\MedioPagoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Redirect;
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
    // return view('auth.login');
    return Redirect('login');
});

//Rutas Resources Basicas
Route::resource('/proveedor',ProveedorController::class,['index']);
Route::resource('/categoria',CategoriaController::class,['index']);
Route::resource('/persona',PersonaController::class,['index']);
Route::resource('/mediopago',MedioPagoController::class,['index']);
Route::resource('/compra',CompraController::class,['index']);
Route::resource('/producto',ProductoController::class,['index']);
Route::resource('/venta',VentaController::class,['index']);
Route::resource('/pago',PagoController::class,['index']);
Route::resource('/cuenta',CuentaController::class,['index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
