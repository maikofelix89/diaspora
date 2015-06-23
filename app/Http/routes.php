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


// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'LandingController@index');
//Route::get('/projects', 'ProjectController@show');
//Route::get('/projects/create', 'ProjectController@index');





Route::get('contactus','ContactusController@index');

Route::Resource('staff','StaffController');

Route::resource('Vacancy','VacancyController');






Route::resource('projects','ProjectController');


Route::resource('projCategories','ProjectCategoriesController');

Route::resource('Calendar','CalendarController');






//checks if user is authenticated,allows or redirects to login

Route::group(['middleware' => 'auth'], function () {

	Route::get('admindashboard', [
    'as' => 'dashboard', 
    'uses' => 'ProjectController@newboard',
]);

	

	Route::get('/adminprojlist','ProjectController@adminprojlist');

	//add more project photos
    Route::get('/projects/{projects}/addphoto','ProjectController@addphoto');


	
	Route::get('/projects/create', 'ProjectController@create');
     
     //add more project photos
	Route::post('/photoform', 'ProjectController@savephoto');

	Route::get('/staff/create','StaffController@create');

	Route::get('/projCategories/create',[
		 'as' => 'projCategories',
		'uses' => 'ProjectCategoriesController@create']);
	Route::get('/Vacancy/create','VacancyController@create');

	Route::get('/projCategories/create','ProjectCategoriesController@create');

	Route::get('/projCategories','ProjectCategoriesController@index');


//post forms
Route::post('/projectform', 'ProjectController@store');

Route::post('/projectcatform', 'ProjectCategoriesController@store');

Route::post('/stafform', 'StaffController@store');

Route::post('/addvacancy', 'VacancyController@store');

Route::post('/addcalendar', 'CalendarController@store');

	


	});













/* Route::get('/portfolio', 'PortfolioController@index');

Route::get('home', 'HomeController@index');

*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController', 
]);


