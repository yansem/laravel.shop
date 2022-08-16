<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Category\DestroyController::class)->name('category.destroy');
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('tag.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('tag.create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('tag.store');
    Route::get('/{tag}', \App\Http\Controllers\Category\ShowController::class)->name('tag.show');
    Route::get('/{tag}/edit', \App\Http\Controllers\Category\EditController::class)->name('tag.edit');
    Route::patch('/{tag}', \App\Http\Controllers\Category\UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', \App\Http\Controllers\Category\DestroyController::class)->name('tag.destroy');
});
