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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::group(['middleware'=>['auth','role:Admin|Encargado']],
function (){
    Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'index'])->name('inventario.index');
    Route::get('/inventario/create', [App\Http\Controllers\InventarioController::class, 'create'])->name('inventario.create');
    Route::get('/inventario/update', [App\Http\Controllers\InventarioController::class, 'update'])->name('inventario.update');
    Route::get('/inventario/delete', [App\Http\Controllers\InventarioController::class, 'delete'])->name('inventario.delete');
});


Route::group(['middleware'=>['auth','role:Admin|Encargado']],
function (){
    Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');
    Route::post('/categoria/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categoria.create');
    Route::get('/categoria/update/{id}', [App\Http\Controllers\CategoriaController::class, 'update'])->name('categoria.update');
    Route::get('/categoria/delete', [App\Http\Controllers\CategoriaController::class, 'delete'])->name('categoria.delete');
});

Route::group(['middleware'=>['auth','role:Admin']],
function (){
    Route::get('/unidad', [App\Http\Controllers\UnidadesController::class, 'index'])->name('unidad.index');
    Route::post('/unidad/create', [App\Http\Controllers\UnidadesController::class, 'create'])->name('unidad.create');
    Route::get('/unidad/update/{id}', [App\Http\Controllers\UnidadesController::class, 'update'])->name('unidad.update');
    Route::get('/unidad/delete', [App\Http\Controllers\UnidadesController::class, 'delete'])->name('unidad.delete');
});


Route::group(['middleware'=>['auth','role:Admin|Encargado']],
function (){
    Route::get('/producto', [App\Http\Controllers\ProductosController::class, 'index'])->name('producto.index');
    Route::get('/producto/create', [App\Http\Controllers\ProductosController::class, 'create'])->name('producto.create');
    Route::post('/producto/cargar', [App\Http\Controllers\ProductosController::class, 'store'])->name('producto.store');
    Route::get('/producto/update/{id}', [App\Http\Controllers\ProductosController::class, 'update'])->name('producto.update');
    Route::get('/producto/delete', [App\Http\Controllers\ProductosController::class, 'delete'])->name('producto.delete');
});

Route::group(['middleware'=>['auth','role:Admin']],function (){
    Route::get('/usuario', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('/usuario/create', [App\Http\Controllers\UsuariosController::class, 'create'])->name('usuarios.create');
    Route::get('/usuario/update', [App\Http\Controllers\UsuariosController::class, 'update'])->name('usuarios.update');
    Route::get('/usuario/delete', [App\Http\Controllers\UsuariosController::class, 'delete'])->name('usuarios.delete');
    Route::get('/usuario/roles/{id}', [App\Http\Controllers\UsuariosController::class, 'asignarrol'])->name('usuarios.asignarrol');
    Route::post('/usuario/cambiar_rol', [App\Http\Controllers\UsuariosController::class, 'cambiar_rol'])->name('usuarios.cambiar_rol');
    Route::get('/usuario/asignar_sucursal', [App\Http\Controllers\UsuariosController::class, 'asignarsucursal'])->name('usuarios.asignarsucursal');
    Route::post('/usuario/asignar_sucursal_user', [App\Http\Controllers\UsuariosController::class, 'asignarsucursal_user'])->name('usuarios.asignarsucursal_user');
});

Route::group(['middleware'=>['auth','role:Admin|Encargado|Usuarios']],function (){
    Route::get('/ventas', [App\Http\Controllers\VentasController::class, 'index'])->name('ventas.index');
    Route::get('/ventas/create', [App\Http\Controllers\VentasController::class, 'create'])->name('ventas.create');
    Route::get('/ventas/update', [App\Http\Controllers\VentasController::class, 'update'])->name('ventas.update');
    Route::get('/ventas/delete', [App\Http\Controllers\VentasController::class, 'delete'])->name('ventas.delete');
    Route::get('/ventas/cierre_venta', [App\Http\Controllers\VentasController::class, 'cierre_venta'])->name('ventas.cierre_venta');
    Route::post('/ventas/venta_cerrada', [App\Http\Controllers\VentasController::class, 'venta_cerrada'])->name('ventas.venta_cerrada');
    Route::get('/ventas/report_venta', [App\Http\Controllers\VentasController::class, 'report_venta'])->name('ventas.report_venta');
    Route::get('/ventas/filter_venta', [App\Http\Controllers\VentasController::class, 'filter_venta'])->name('ventas.filter_venta');
});


Route::group(['middleware'=>['auth','role:Admin']],
function (){
    Route::get('/sucursal', [App\Http\Controllers\SucursalController::class, 'index'])->name('sucursal.index');
    Route::get('/sucursal/create', [App\Http\Controllers\SucursalController::class, 'create'])->name('sucursal.create');
    Route::get('/sucursal/update', [App\Http\Controllers\SucursalController::class, 'update'])->name('sucursal.update');
    Route::get('/sucursal/delete', [App\Http\Controllers\SucursalController::class, 'delete'])->name('sucursal.delete');
    Route::get('/sucursal/asignar_producto', [App\Http\Controllers\SucursalController::class, 'asignar_producto'])->name('sucursal.asignar_producto');
    Route::post('/sucursal/producto_asignado', [App\Http\Controllers\SucursalController::class, 'producto_asignado'])->name('sucursal.producto_asignado');
});
