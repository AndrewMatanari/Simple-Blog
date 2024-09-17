<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'index'])->name('book');
Route::get('form', [BookController::class, 'form'])->name('book.form');
Route::post('create', [BookController::class, 'create'])->name('book.create');
Route::delete('/books/{id}', [BookController::class, 'delete'])->name('book.delete');
Route::get('/books/{id}/edit', [BookController::class,  'edit'])->name('book.edit');
Route::post('book/{id}', [BookController::class, 'update'])->name('book.update');
