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


Route::get('/','communityController@index')->name('welcome');
Route::post('/community-post','communityController@communityPost')->name('communityPost');
Route::post('/status-delete/{id}','communityController@delete')->name('status-delete');
Route::get('/status-edit/{id}','communityController@Edit')->name('status-edit');
Route::post('/community-update/{id}','communityController@update')->name('community-update');



Route::get('/profile','profileController@profile')->name('profile');
Route::get('/profile/edit/{id}','profileController@profileEdit')->name('profile.edit');
Route::post('/profile-update','profileController@profileUpdate')->name('profileUpdate');

Route::get('/messages','messageController@message')->name('message');
Route::get('/events','eventController@events')->name('events');
Route::post('/event-post','eventController@eventPost')->name('eventPost');
Route::get('/jobs','jobController@jobs')->name('jobs');
Route::post('/job-post','jobController@jobPost')->name('jobPost');
Route::get('/bloods','bloodController@bloods')->name('bloods');
Route::post('/blood-post','bloodController@bloodPost')->name('bloodPost');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

