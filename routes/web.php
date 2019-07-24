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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/timecard', 'PagesController@timecard');
Route::get('/admin', 'PagesController@admin');

Route::resource('posts', 'PostsController');
Route::resource('university_california', 'UCPostsController');
Route::resource('stanford_university', 'StanfordPostsController');
Route::resource('stanford_university_2017', 'StanfordUniversity2017Controller');
Route::resource('stanford_university_2016', 'StanfordUniversity2016Controller');

//Route::get('/index', 'InventoryController@university_california');

Route::get('/index', 'PostsController@index');


Auth::routes();

Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/inventory', 'DashboardController@inventory');
