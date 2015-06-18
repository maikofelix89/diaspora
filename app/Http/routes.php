<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'LandingController@index');
//Route::get('/projects', 'ProjectController@show');
//Route::get('/projects/create', 'ProjectController@index');


Route::get('/adminindex','VacancyController@adminindex');


Route::get('contactus','ContactusController@index');

Route::Resource('staff','StaffController');

Route::get('dashboard','ProjectController@board');
Route::get('admindashboard','ProjectController@newboard');

//post forms
Route::post('/projectform', 'ProjectController@store');

Route::post('/projectcatform', 'ProjectCategoriesController@store');

Route::post('/stafform', 'StaffController@store');

Route::post('/addvacancy', 'VacancyController@store');



Route::resource('projects','ProjectController');


Route::resource('projCategories','ProjectCategoriesController');


Route::resource('Vacancy','VacancyController');

Route::resource('Calendar','CalendarController');

Route::post('/addcalendar', 'CalendarController@store');



/* Route::get('/portfolio', 'PortfolioController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',z
	'password' => 'Auth\PasswordController', f
]);

*/
