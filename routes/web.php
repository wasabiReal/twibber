<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/gossip');
});

Route::group(['namespace' => 'Gossip'], function (){
    Route::get('/gossip', 'IndexController')->name('gossip.index');
    Route::get('/gossip/create', 'CreateController')->name('gossip.create');

    Route::post('/gossip', 'StoreController')->name('gossip.store');
    Route::get('/gossip/{post}', 'ShowController')->name('gossip.show');
    Route::delete('/gossip/{post}', 'DestroyController')->name('gossip.delete');
});




Route::get('/notifications', 'NotificationsController@index')->name('notifications.index');
Route::get('/profile', 'UserController@index')->name('profile.index');
