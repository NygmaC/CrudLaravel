<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/produtos', 'ControllerProduto@index');
Route::get('/categorias', 'ControllerCategoria@index');