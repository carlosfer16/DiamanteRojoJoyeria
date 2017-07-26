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
Route::get('/', 'TiendaController@index');

//PRODUCTOS
Route::get('administrador/productos', 'Productos@getProductos');

Route::post('productos/addProductos', 'Productos@addProductos');

Route::post('productos/deleteProd', 'Productos@deleteProd');

//FIN PRODUCTOS

//CATEGORIAS
Route::post('categorias/addCategoria', 'CategoriasController@addCategoria');

Route::post('categorias/deleteCat', 'CategoriasController@deleteCat');

Route::get('administrador/categorias', 'CategoriasController@index');

Route::post('categorias/editCat', "CategoriasController@editCat");

//FIN CATEGORIAS

//LOGIN
Route::get('login', "LoginAdminController@index");
Route::post('login/login', "LoginAdminController@login");
Route::post('login/registrar', "LoginAdminController@registrar");

//FIN LOGIN

Route::post('administrador', "LoginAdminController@index");

Route::get('administrador/login' , "LoginAdminController@login" );

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
