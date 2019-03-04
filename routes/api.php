<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('categories', 'Api\CategoryController@index'); // LISTAR
Route::post('categories', 'Api\CategoryController@store'); // CADASTRAR
Route::put('categories/{id}', 'Api\CategoryController@update'); // ATUALIZAR
Route::delete('categories/{id}', 'Api\CategoryController@delete'); // DELETAR
*/

/*
route::resource('categories', 'Api\CategoryController', [
    'except' => ['edit', 'create']
]);
*/

route::apiResource('categories', 'Api\CategoryController');