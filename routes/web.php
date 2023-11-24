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




Route::get('/gossip', 'GossipController@index')->name('gossip.index');
Route::get('/gossip/create', 'GossipController@create')->name('gossip.create');
Route::get('/notifications', 'NotificationsController@index')->name('notifications.index');
Route::get('/profile', 'UserController@index')->name('profile.index');
