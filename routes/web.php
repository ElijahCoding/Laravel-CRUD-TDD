<?php

Route::get('/', function() {
    return redirect()->route('products.index');
});


Route::middleware('auth')->group(function () {
    Route::get('products', 'ProductController@index')->name('products.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
