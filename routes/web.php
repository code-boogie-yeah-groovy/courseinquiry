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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminportal', function () {
    return view('adminportal');
});

Route::get('/schools', [
  'uses' => 'DisplayController@indexSchool',
  'as' => 'schools'
]);

Route::get('/courses', [
  'uses' => 'DisplayController@indexCourse',
  'as' => 'courses'
]);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');
