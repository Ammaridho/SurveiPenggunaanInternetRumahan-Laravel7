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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','indexController@index');

Route::get('/penggunaan','penggunaanController@penghuni')->name('penghuni');
Route::get('/penggunaangadget','penggunaanController@gadget')->name('gadget');

Route::post('/','surveiController@store')->name('submitSurvei');

Route::get('/penutup','indexController@penutup')->name('penutup');

// Login
Route::post('/login','authController@login')->name('login');

// session
Route::group(['middleware' => 'ceksession'], function(){
    // Logout
    Route::get('/logout','authController@logout')->name('logout');

    // Export
    Route::get('/exportExcel','exportController@exportExcel')->name('exportExcel');
});

