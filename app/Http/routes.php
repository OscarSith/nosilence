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

Route::get('/', 'WelcomeController@index');
Route::get('nosotros', 'WelcomeController@nosotros');
Route::get('eventos', 'WelcomeController@events');
Route::get('servicios', 'WelcomeController@services');
Route::get('contacto', 'WelcomeController@contacto');
Route::get('testimonios', 'WelcomeController@testimonial');
Route::post('contact', 'WelcomeController@sendMail');

Route::group(['prefix' => 'admin'], function($route) {
	$route->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
	$route->get('testimonios', ['middleware' => 'auth', 'as' => 'testimonial', 'uses' => 'TestimonialController@index']);
	$route->put('testimonios/aceptar', ['middleware' => 'auth', 'as' => 'accept', 'uses' => 'TestimonialController@update']);
	$route->delete('testimonios/rechazar', ['middleware' => 'auth', 'as' => 'reject', 'uses' => 'TestimonialController@delete']);
	$route->post('testimonios', ['as' => 'addTestimonial', 'uses' => 'TestimonialController@store']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
