<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\UserController;

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

Route::controller(UserController::class)->prefix('user')->name('user.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'postlogin')->name('postlogin');

    Route::get('/register', 'register')->name('register');
    Route::post('/postregister', 'postregister')->name('postregister');
    
    Route::get('/logout', 'logout')->name('logout');
});
