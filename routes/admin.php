<?php


Route::get('/', 'HomeController@index')->name('home');

Route::resource('addbaners','AddBannerController');

?>