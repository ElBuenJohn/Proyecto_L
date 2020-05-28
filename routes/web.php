<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('productos-list-pdf', 'ProductosController@exportPdf')->name('productos.pdf');

Route::resource('/productos', 'ProductosController');
Route::resource('/proveedores', 'ProveedoresController');
Route::resource('/compras', 'ComprasController');
Route::resource('/clientes', 'ClientesController');
Route::resource('/ventas', 'VentasController');
Route::resource('/usuarios', 'UsuariosController');

