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
    return 'MainPageIdk';
});

Route::get('/feed', 'FeedController@index')->name('feed.index');
Route::get('/notifications', 'NotificationsController@index')->name('notifications.index');
Route::get('/profile', 'UserController@index')->name('profile.index');
Route::get('/post', 'PostController@index')->name('post.index');
