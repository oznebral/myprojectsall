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
Route::prefix('{lang?}')->middleware('language')->group(function($lang){

        Route::get('/','GeneralController@index')->name('index');

        Route::get('/home-page',function () {
                $title = trans('general.titles.title-home');
                $description = trans('general.descriptions.1');
                return view('home')->with(['title' => $title,'description' => $description]);
        })->name('home');

        Route::get('/our-hotel',function () {
                $title = trans('general.titles.title-our-hotel');
                $description = trans('general.descriptions.2');
                return view('ourhotel')->with(['title' => $title,'description' => $description]);
        })->name('ourhotel');

        Route::get('/room-page',function () {
                $title = trans('general.titles.title-rooms');
                $description = trans('general.descriptions.3');
                return view('rooms')->with(['title' => $title,'description' => $description]);
        })->name('rooms');

        Route::get('/facilities-page',function () {
                $title = trans('general.titles.title-facilities');
                $description = trans('general.descriptions.4');
                return view('facilities')->with(['title' => $title,'description' => $description]);
        })->name('facilities');

        Route::get('/contact-page',function () {
                $title = trans('general.titles.title-contact');
                $description = trans('general.descriptions.5');
                return view('contact')->with(['title' => $title,'description' => $description]);
        })->name('contact');

        Route::get('/standart-room',function () {
                $title = trans('general.titles.title-standart-room');
                $description = trans('general.descriptions.6');
                return view('standartroom')->with(['title' => $title,'description' => $description]);
        })->name('standartroom');
        
        Route::get('/deluxe-room',function () {
                $title = trans('general.titles.title-deluxe-room');
                $description = trans('general.descriptions.7');
                return view('deluxeroom')->with(['title' => $title,'description' => $description]);
        })->name('deluxeroom');

        Route::get('/lobby-room',function () {
                $title = trans('general.titles.title-social-area-room');
                $description = trans('general.descriptions.8');
                return view('lobby')->with(['title' => $title,'description' => $description]);
        })->name('lobby');

        Route::get('/a-la-carte',function () {
                $title = trans('general.titles.title-la-carte-restaurant');
                $description = trans('general.descriptions.9');
                return view('restaurant')->with(['title' => $title,'description' => $description]);
        })->name('restaurant');

        Route::get('/meeting-room',function () {
                $title = trans('general.titles.title-meeting-room');
                $description = trans('general.descriptions.10');
                return view('meetingroom')->with(['title' => $title,'description' => $description]);
        })->name('meetingroom');

        Route::get('/media-room',function () {
                $title = trans('general.titles.title-media-room');
                $description = trans('general.descriptions.11');
                return view('mediaroom')->with(['title' => $title,'description' => $description]);
        })->name('mediaroom');

        Route::get('/ball-room',function () {
                $title = trans('general.titles.title-meeting-room');
                $description = trans('general.descriptions.12');
                return view('meetingroom')->with(['title' => $title,'description' => $description]);
        })->name('ballroom');

        Route::get('/fitness-room',function () {
                $title = trans('general.titles.title-fitness-room');
                $description = trans('general.descriptions.13');
                return view('fitness')->with(['title' => $title,'description' => $description]);
        })->name('fitness');

        Route::get('/terms-page',function () {
                $title = trans('general.titles.title-terms-conditions');
                $description = trans('general.descriptions.14');
                return view('terms')->with(['title' => $title,'description' => $description]);
        })->name('terms');

        Route::get('/privacy-page',function () {
                $title = trans('general.titles.title-privacy-policy');
                $description = trans('general.descriptions.15');
                return view('privacy')->with(['title' => $title,'description' => $description]);
        })->name('privacy');

        Route::get('/disclamer-page',function () {
                $title = trans('general.titles.title-disclamer');
                $description = trans('general.descriptions.16');
                return view('disclamer')->with(['title' => $title,'description' => $description]);
        })->name('disclamer');
});








