<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PagesController@index')->name('home');
Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/nominate','PagesController@nominate')->name('nominate');
Route::get('/seat-booking','PagesController@seatBooking')->name('seat-booking');
Route::get('/faqs','PagesController@faqs')->name('faqs');
Route::get('/pricing','PagesController@pricing')->name('pricing');
Route::get('/sponsorship','PagesController@sponsorship')->name('sponsorship');
Route::get('/award-category','PagesController@awardCategory')->name('award-category');
Route::get('/award-process','PagesController@awardProcess')->name('award-process');
Route::get('/category-details','PagesController@categoryDetails')->name('category-details');
Route::get('/category-details_more','PagesController@categoryDetails1')->name('category-details_more');
Route::get('/selection-criteria','PagesController@selectionCriteria')->name('selection-criteria');
Route::get('/covid-19','PagesController@covid')->name('covid-19');
