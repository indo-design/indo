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

Route::get('/', ['uses' => 'ThemeController@index', 'as' => 'main']);
Route::post('post', ['uses' => 'ThemeController@PostContact', 'as' => 'post']);
Route::get('contact/report', ['uses' => 'ThemeController@GetContact', 'as' => 'report']);
// Route::get('admin/dashboar', ['uses' => 'HomeController@index', 'as' => 'dashboar']);

// Route::resource('admin/quesioner', 'QuesionerController', ['names' => 'quesioner']);
// Route::resource('admin/lecturer', 'LecturerController', ['names' => 'lecturer']);
// Route::resource('admin/student', 'StudentController', ['names' => 'student']);
// Route::resource('admin/course', 'CourseController', ['names' => 'course']);
// Route::resource('admin/users', 'UserController', ['names' => 'user']);

// Route::get('hasil', ['uses' => 'HasilController@index', 'as' => 'hasil']);

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);