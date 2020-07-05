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


Route::get('/', 'sitecontroller@index')->name('firstpage');     //the very first page of website
Route::get('/showpage/{slug}', 'sitecontroller@show')->name('showpage');    //individual page of shown Videos
Route::get('/showpost/{slug}', 'sitecontroller@showpost')->name('showpost');    //individual page of shown post

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/admin', 'HomeController@index')->name('admin');    //admin interface

//video routes
    Route::get('/create-video', 'videoController@index')->name('video');
    Route::post('/save-video', 'videoController@store')->name('save_video');
    Route::get('/manage-video', 'videoController@show')->name('manage_video');
    Route::get('/delete-video/{id}', 'videoController@destroy')->name('delete-video');
    Route::get('/video-status/{id}/{video_status}', 'videoController@videostatus')->name('video-status');
//post routes
    Route::get('/create-post', 'postController@index')->name('post');
    Route::post('/save-post', 'postController@store')->name('save_post');
    Route::get('/manage-post', 'postController@show')->name('manage_post');
    Route::get('/delete-post/{id}', 'postController@destroy')->name('delete-post');
    Route::get('/post-status/{id}/{post_status}', 'postController@poststatus')->name('post-status');
});
