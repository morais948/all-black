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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::resource('fans', 'App\Http\Controllers\FanController');
	Route::get('import-xml', 'App\Http\Controllers\FansActionsController@viewImport')->name('import.xml');
	Route::post('import-xml', 'App\Http\Controllers\FansActionsController@importXml')->name('import');
	Route::get('export-xml', 'App\Http\Controllers\FansActionsController@export')->name('export.xml');
	Route::post('delete-all', 'App\Http\Controllers\FansActionsController@clearTableFans')->name('delete.all');
    Route::get('mail', 'App\Http\Controllers\FansActionsController@viewMail')->name('view.email');
    Route::post('send-mail', 'App\Http\Controllers\FansActionsController@sendEmails')->name('send.email');

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

});
