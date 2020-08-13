<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin rutes start
Route::get('/admin','AdminController@index');

Route::resource('/slider', 'SliderCotroller');

Route::get('show/slider', 'AdminController@sliderShow');

//admin routes end

//*******************************//

//all web routes start

Route::get('/index','WebController@index');

Route::get('/category', function () {
    return view('website.web.category');
});

Route::get('/store', function () {
    return view('website.web.store');
});

Route::get('/contact', function () {
    return view('website.web.contactus');
});

Route::get('/about', function () {
    return view('website.web.aboutus');
});
//all web routes end