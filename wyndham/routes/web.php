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

Route::get('/','GeneralController@index')->name('index');
Route::get('/our-hotel','GeneralController@ourhotel')->name('ourhotel');
Route::get('/room-page','GeneralController@rooms')->name('rooms');
Route::get('/facilities-page','GeneralController@facilities')->name('facilities');
Route::get('/contact-page','GeneralController@contact')->name('contact');
Route::get('/standart-room','GeneralController@standartroom')->name('standartroom');
Route::get('/deluxe-room','GeneralController@deluxeroom')->name('deluxeroom');
Route::get('/lobby-room','GeneralController@lobby')->name('lobby');
Route::get('/a-la-carte','GeneralController@restaurant')->name('restaurant');
Route::get('/meeting-room','GeneralController@meetingroom')->name('meetingroom');
Route::get('/media-room','GeneralController@mediaroom')->name('mediaroom');
Route::get('/ball-room','GeneralController@ballroom')->name('ballroom');
Route::get('/fitness-room','GeneralController@fitness')->name('fitness');
Route::get('/terms-page','GeneralController@terms')->name('terms');
Route::get('/privacy-page','GeneralController@privacy')->name('privacy');
Route::get('/disclamer-page','GeneralController@disclamer')->name('disclamer');







