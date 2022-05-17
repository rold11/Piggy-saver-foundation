<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@Home')->name('Home');
Route::get('/contact', 'HomeController@Contact')->name('Contact');

Route::get('/create', 'IncomeController@create')->name('create');
Route::Post('/store', 'IncomeController@store')->name('Income.store');

Route::get('/list', 'IncomeController@list')->name('list');
Route::get('/edit', 'IncomeController@edit')->name('Income.edit');
Route::Post('/update', 'IncomeController@update')->name('Income.update');

Route::Post('/delete', 'IncomeController@delete')->name('Income.delete');

// Route::get('/lists', 'IncomeController@lists')->name('lists');

// Auth::routes();


