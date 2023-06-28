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
	return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('members', ['as' => 'pages.members', 'uses' => 'App\Http\Controllers\AppUserController@get']);
    Route::put('/members/{user}/status', 'App\Http\Controllers\AppUserController@update')->name('members.update');
    Route::delete('/members/{id}', 'App\Http\Controllers\AppUserController@destroy')->name('members.delete');

    Route::get('course', ['as' => 'pages.course', 'uses' => 'App\Http\Controllers\CourseController@get']);

    Route::get('community', ['as' => 'pages.community', 'uses' => 'App\Http\Controllers\CommunityController@get']);

    Route::get('job', ['as' => 'pages.job', 'uses' => 'App\Http\Controllers\JobController@get']);

    Route::get('article', ['as' => 'pages.article', 'uses' => 'App\Http\Controllers\ArticleController@get']);

    Route::get('video', ['as' => 'pages.video', 'uses' => 'App\Http\Controllers\VideoController@get']);

    Route::get('podcast', ['as' => 'pages.podcast', 'uses' => 'App\Http\Controllers\PodcastController@get']);

	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
