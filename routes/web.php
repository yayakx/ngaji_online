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
    return view('head');
});

Route::get('/welcome', 'quran@index');
Route::get('quran', 'quran@index');
Route::get('wahyu', 'quran@turun');
Route::get('ayat', 'quran@ayat');
Route::get('makkiyah', 'quran@makkah');
Route::get('madaniyah', 'quran@madinah');
Route::get('thiwal', 'quran@thiwal');
Route::get('quran/{id}', 'quran@surat');

Auth::routes();
Route::get('/member', 'MemberController@index')->name('member')->middleware('member');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');


// Route::get('/home', 'HomeController@index')->name('home');
