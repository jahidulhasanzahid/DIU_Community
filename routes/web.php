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


Route::get('/','HomeController@index')->name('welcome');
Route::get('/profile','profileController@profile')->name('profile');
Route::get('/profile/edit','profileController@profileEdit')->name('profile.edit');
Route::post('/profile-update','profileController@profileUpdate')->name('profileUpdate');

Route::get('/messages','messageController@message')->name('message');
Route::get('/events','eventController@events')->name('events');
Route::get('/jobs','jobController@jobs')->name('jobs');
Route::get('/bloods','bloodController@bloods')->name('bloods');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

