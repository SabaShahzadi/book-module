<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\App\Http\Controllers\BlogController;
use Modules\Blog\App\Http\Controllers\BookController;

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

Route::group([], function () {
    Route::resource('blog', BlogController::class)->names('blog');
    Route::resource('book', BookController::class)->names('book');
    Route::post('storeBook',[BookController::class, 'store'])->name('store.book');
    Route::get('editBook/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('updateBook/{id}', [BookController::class, 'update'])->name('book.update');
    Route::get('deleteBook/{id}', [BookController::class, 'destroy'])->name('book.destroy');
});



