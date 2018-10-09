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

Route::get('/', 'HomeController@index');
Route::get('/sobre', 'HomeController@sobre');
Route::get('/contacto', 'HomeController@contacto');
Route::get('/produtos', 'HomeController@produtos');
Route::get('/carrinho', 'HomeController@carrinho');
Route::post('pesquisar', 'ProdutoController@search_site');
Route::post('finalizar-pedido', 'PedidoController@finalizar_pedido');
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');


Route::resource('produto', 'ProdutoController');
Route::resource('mensagem', 'MensagemController');
Route::get('eliminar/produto/{id}', 'ProdutoController@eliminar');
Route::post('search/produto', 'ProdutoController@search');
Route::post('adicionar-carrinho', 'PedidoController@adicionar_carrinho');
Route::get('eliminar-do-carrinho/{id}', 'PedidoController@eliminar');
Route::get('/listar_pedido', 'PedidoController@listar_pedidos');
Route::resource('pedido', 'PedidoController');


