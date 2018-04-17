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

setlocale(LC_ALL, 'ru_RU.utf8');
\Carbon\Carbon::setLocale('ru');


Auth::routes();
Route::get('/', 'PagesController@index')->name('index');

Route::view('/learning-from-scratch', 'lendings.learningFromScratch');

Route::get('getCalendarEvent', 'ExempleJsonResponse@getEvent');
Route::get('getCalendarNav', 'ExempleJsonResponse@getNav');

Route::get('home', 'PagesController@home_demetrius')->name('home');
Route::get('learning', 'PagesController@trainers')->name('trainers');
Route::get('calendar', 'PagesController@calendar')->name('pages.calendar');
Route::get('actions', 'PagesController@event')->name('actions');
Route::get('policy', 'PagesController@policy')->name('policy');
Route::get('posts', 'PagesController@event_blog')->name('posts');
Route::get('article', 'PagesController@article');
Route::get('about', 'PagesController@about_school')->name('about');
Route::get('sale', 'PagesController@discount')->name('sale');
Route::get('events', 'PagesController@events')->name('events');

//Занимаю этим
//И это хорошо

Route::get('instagram', 'PagesController@instagram')->name('instagram');
Route::get('videoGallery', 'PagesController@videoGallery')->name('videoGallery');
Route::get('photoGallery', 'PagesController@photoGallery')->name('photoGallery');

Route::get('contacts', 'PagesController@contacts')->name('contacts');
Route::get('howToGet', 'PagesController@howToGet')->name('howToGet');
Route::get('education', 'PagesController@education')->name('education');
Route::get('education/{id}', 'PagesController@about_course');
Route::resource('educations','EducationsController');
//Route::resource('trainers', 'TrainersController');

Route::get('reviews/random', 'Media\\ReviewsController@random')->name('reviews.random');
Route::resource('reviews', 'Media\\ReviewsController');

Route::resource('call-requests', 'Calls\\CallRequestsController');


Route::resource('trainers', 'TrainersController');
Route::resource('courses', 'CoursesController');

// Write below is prohibited
Route::resource('/', 'PagesController');

