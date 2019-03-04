<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', 'Api\CategoryController@index'); // LISTAR
Route::post('categories', 'Api\CategoryController@store'); // CADASTRAR
Route::put('categories/{id}', 'Api\CategoryController@update'); // ATUALIZAR