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

Route::get('/', 'HomeController@homePage') -> name('homePage');

Route::get('/comics', 'HomeController@home') -> name('home');
Route::get('/comics/show/{id}', 'HomeController@show') -> name('show');

Route::get('/comics/create', 'HomeController@create') -> name('create');
Route::post('/comics/store', 'HomeController@store') -> name('store');

Route::get('/comics/edit/{id}', 'HomeController@edit') -> name('edit');
Route::post('/comics/update/{id}', 'HomeController@update') -> name('update');

Route::get('/comics/delete/{id}', 'HomeController@delete') -> name('delete');

// <--------------------------------> ROTTE PER LA SECONDA ENTITA'

Route::get('/books', 'BookController@home') -> name('homeBook');
Route::get('/books/show/{id}', 'BookController@show') -> name('showBook');

Route::get('/books/create', 'BookController@create') -> name('createBook');
Route::post('/books/store', 'BookController@store') -> name('storeBook');

Route::get('/books/edit/{id}', 'BookController@edit') -> name('editBook');
Route::post('/books/update/{id}', 'BookController@update') -> name('updateBook');

Route::get('/books/delete/{id}', 'BookController@delete') -> name('deleteBook');
