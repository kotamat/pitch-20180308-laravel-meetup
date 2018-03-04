<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'test'], function () {
    Route::get('', function (Request $request) {
        return response($request->all());
    })->name('test-get');

    Route::post('', function (Request $request) {
        return response($request->all());
    })->name('test-post');

    Route::put('{id}', function ($id, Request $request) {
        return response(['id' => $id] + $request->all());
    })->name('test-put');

    Route::delete('{id}', function ($id, Request $request) {
        return response(['id' => $id] + $request->all());
    })->name('test-delete');
});
