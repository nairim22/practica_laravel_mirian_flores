<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('clientes', 'Api\ClienteController@index');
Route::get('clientes/{cliente}/', 'Api\ClienteController@show');
Route::post('clientes/', 'Api\ClienteController@store');
Route::put('clientes/{cliente}/', 'Api\ClienteController@update');
Route::delete('clientes/{cliente}/', 'Api\ClienteController@destroy');

// api -- listar ++++ clientes
/*
Route::get('clientes', 'ClienteController@index');
Route::get('clientes/{cliente}/', 'ClienteController@show');
Route::post('clientes/', 'ClienteController@store');
Route::put('clientes/{cliente}/', 'ClienteController@update');
Route::delete('clientes/{cliente}/', 'ClienteController@destroy');*/

// MODO DE PAGO
Route::get('pagos', 'Api\ModoPagoController@index');
Route::get('pagos/{pago}/', 'Api\ModoPagoController@show');
Route::post('pagos/', 'Api\ModoPagoController@store');
Route::put('pagos/{pago}/', 'Api\ModoPagoController@update');
Route::delete('pagos/{pago}/', 'Api\ModoPagoController@destroy');
//CATEGORIAS
Route::get('categorias', 'Api\CategoriaController@index');
Route::get('categorias/{categoria}/', 'Api\CategoriaController@show');
Route::post('categorias/', 'Api\CategoriaController@store');
Route::put('categorias/{categoria}/', 'Api\CategoriaController@update');
Route::delete('categorias/{categoria}/', 'Api\CategoriaController@destroy');
// PRODUCTOS
Route::get('productos', 'Api\ProductoController@index');
Route::get('productos/{producto}/', 'Api\ProductoController@show');
Route::post('productos/', 'Api\ProductoController@store');
Route::put('productos/{producto}/', 'Api\ProductoController@update');
Route::delete('productos/{producto}/', 'Api\ProductoController@destroy');

// FACTURA
Route::get('facturas', 'Api\FacturaController@index');
Route::get('facturas/{factura}/', 'Api\FacturaController@show');
Route::post('facturas/', 'Api\FacturaController@store');
Route::put('facturas/{factura}/', 'Api\FacturaController@update');
Route::delete('facturas/{factura}/', 'Api\FacturaController@destroy');

//DETALLES
Route::get('detalles', 'Api\DetalleController@index');
Route::get('detalles/{detalle}/', 'Api\DetalleController@show');
Route::post('detalles/', 'Api\DetalleController@store');
Route::put('detalles/{detalle}/', 'Api\DetalleController@update');
Route::delete('detalles/{detalle}/', 'Api\DetalleController@destroy');
