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

Route::get('/', function () {
    return view('main');
});

Route::match(['get', 'post'] ,'/email', 'FormController@index')->name('email');

Route::get('/testemail', function() {
    return new \App\Mail\MakeOrder();
})->name('testemail');
