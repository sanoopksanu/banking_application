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
    return view('welcome_page');
});
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::get('inbox/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('deposit', '\App\Http\Controllers\DepositeController');
Route::resource('withdrawal', '\App\Http\Controllers\WithdrawController');
Route::resource('transfer', '\App\Http\Controllers\TransferController');
Route::resource('statement', '\App\Http\Controllers\StatementController');
});
