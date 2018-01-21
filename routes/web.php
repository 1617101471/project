<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('template','LatihanController@template');
Route::get('template2','LatihanController@template2');
Route::get('template3','LatihanController@template3');
Route::get('template4','LatihanController@template4');
Route::get('template5','LatihanController@template5');
Route::get('table','LatihanController@table');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

