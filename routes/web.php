<?php
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('tips', 'TipsController@index')->name('tips');
    Route::get('activity', 'ActivityController@index')->name('activity');
    Route::get('tambah','ActivityController@tambah');
    Route::post('store','ActivityController@store');
    Route::get('edit/{No}','ActivityController@edit');
    Route::post('activity/update','ActivityController@update');
    Route::get('hapus/{id}','ActivityController@hapus');
    Route::get('logout', 'AuthController@logout')->name('logout');
});