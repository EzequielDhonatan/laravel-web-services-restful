<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
route::group(['prefix' => 'v1', 'namespace' => 'Api\V1'], function() {
    Route::get('categories', 'CategoryController@index'); // LISTAR
    Route::post('categories', 'CategoryController@store'); // CADASTRAR
    Route::put('categories/{id}', 'CategoryController@update'); // ATUALIZAR
    Route::delete('categories/{id}', 'CategoryController@delete'); // DELETAR
});
*/

/*
route::resource('categories', 'Api\CategoryController', [
    'except' => ['edit', 'create']
]);
*/

route::group(['prefix' => 'v1', 'namespace' => 'Api\V1'], function() {

    // # CATEGORY
    route::get('categories/{id}/products', 'CategoryController@products');
    route::apiResource('categories', 'CategoryController');

    // # PRODUCT
    route::apiResource('products', 'ProductController');
});