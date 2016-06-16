<?php

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/services', 'MainController@services');
Route::get('/gallery', 'MainController@gallery');

Route::get('/contact', 'ContactController@index');
Route::post('/contact/send', 'ContactController@send');
