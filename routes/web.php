<?php

use App\Http\Controllers\BookController;  
use App\Http\Controllers\CategoryController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/store', [CategoryController::class, 'store']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
Route::get('/categories/{id}/books', [CategoryController::class, 'showBooks'])->name('categories.books');
Route::get('/categories/books', [CategoryController::class, 'showBooksall'])->name('categoriesall.books');

route::get('/books', [BookController::class, 'index']);
route::get('books/create', [BookController::class,'create'])->name('create.books');
route::post('/books/store', [BookController::class,'store']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);