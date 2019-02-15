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

Route::get('/', 'LandingPageController@index')->name('landing-page');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('profile','UsersController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services', 'ServiceController@index');

Route::get('/vacancy', 'VacancyController@index');
Route::post('/vacancy', 'VacancyController@addVacancy');

Route::get('/resume', 'ResumeController@index');
Route::post('/resume','ResumeController@addResume');

Route::get('/news','NewsController@index');

Route::get('/news/{slug}','NewsController@show')->name('news.show');

Route::get('/news/{id}',function ($id){
    echo $id;
});

Route::post('/news/addComment','NewsController@addComment');

Route::post('/like','Commentcontroller@like')->name('like');




