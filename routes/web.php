<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/produtos', 'ControllerProduto@indexView');
Route::get('/categorias', 'ControllerCategoria@index');
Route::get('/categorias/setcadastro', 'ControllerCategoria@setModalCadastro');
Route::post('/categorias/setinsert', 'ControllerCategoria@setInsert');
Route::get('/categorias/excluir/{id}', 'ControllerCategoria@setDelete');
