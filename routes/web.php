<?php

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

// Admin routes
Route::prefix('admin')->group(function(){
     Route::get('/', function() {
        echo "Admin homepage";
     });

     Route::get('guest', 'GuestController@index')->name('guest.index');

     Route::get('video', 'VideoController@index');
     Route::get('video/{video}', 'VideoController@show');

     Route::get('video/create', 'VideoController@create');
     Route::post('video/{video}', 'VideoController@store');
});

// Guest routes
Route::get('/', function() {
    echo "Guest landing page";
    foreach (App\Video::all() as $video) {
        echo $video->title;
    }
});

