<?php

// Sarahah Routes

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');

Route::get('messages','AccountController@index');

Route::get('user/{username}','AccountController@show');

Route::get('thankyou','PageController@thank');
Route::post('make/{id}','AccountController@store');

Route::delete('messages','AccountController@delete');

Route::get('setting','SettingController@index');
Route::get('setting/password','SettingController@pass');
Route::get('setting/delete','SettingController@del');
Route::post('setting/delete','SettingController@delete');
Route::post('setting/{op}','SettingController@store');


Auth::routes();




Route::get('makeIt',function(){
$e=Artisan::call('storage:link');
echo 'done';
});

Route::get('migrate',function(){
$e=Artisan::call('migrate');
echo 'done';
});
