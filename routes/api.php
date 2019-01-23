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


Route::get('/categorias', 'ControllerCategoria@categoriasjson');
Route::get('/produtos', 'ControllerProduto@getProdutos');
Route::post('/setcadastro', 'ControllerProduto@setCadastro');
Route::delete('/deleteprodutos/{id}', 'ControllerProduto@delete');
Route::get('/getproduto/{id}', 'ControllerProduto@getProdutoByID');