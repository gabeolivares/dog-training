<?php

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/services', 'ServicesController@index');
Route::get('/gallery', 'MainController@gallery');
Route::get('/submit-review', 'MainController@review');

Route::get('/services/boarding', 'ServicesController@boarding');
Route::get('/services/grooming', 'ServicesController@grooming');
Route::get('/services/training', 'ServicesController@training');
Route::get('/services/exclusive', 'ServicesController@exclusive');
Route::get('/services/daycare', 'ServicesController@daycare');

Route::get('/contact', 'ContactController@index');
Route::post('/contact/send', 'ContactController@send');
