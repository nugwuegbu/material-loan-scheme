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

Route::get('/', function () {
    return view('index');
});
Route::get('about-us',function(){
	return view('about-us');
})->name('about-us');
Route::get('contact-us',function(){
	return view('contact-us');
})->name('contact-us');

Route::get('send', 'HomeController@sendNotification');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/contractor', 'HomeController@contractorhome')->name('contractor.home')->middleware('is_contractor');
Route::resource('loans','LoanController');
Route::resource('documents','DocumentController');

