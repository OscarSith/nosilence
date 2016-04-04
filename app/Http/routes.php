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
Route::get('fiesta-15', 'WelcomeController@quincianero');
Route::get('fiesta-promo', 'WelcomeController@party');
Route::get('servicios', 'WelcomeController@services');
Route::get('contacto', 'WelcomeController@contacto');
Route::get('testimonios', 'WelcomeController@testimonial');
Route::get('cotizacion', 'WelcomeController@cotizacion');
Route::post('contact', 'WelcomeController@sendMail');
Route::post('cotiza-fiesta-promocion', ['as' => 'cotizaFiestaPromocion', 'uses' => 'WelcomeController@sendCotizacion']);
Route::post('cotiza-fiesta-15', ['as' => 'cotizaFiestaDe15', 'uses' => 'WelcomeController@sendCotizacion']);

Route::get('pass', function() {
	echo bcrypt('root');
});

Route::group(['prefix' => 'admin'], function($route) {
	$route->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
	$route->get('testimonios', ['middleware' => 'auth', 'as' => 'testimonial', 'uses' => 'TestimonialController@index']);
	$route->put('testimonios/aceptar', ['middleware' => 'auth', 'as' => 'accept', 'uses' => 'TestimonialController@update']);
	$route->delete('testimonios/rechazar', ['middleware' => 'auth', 'as' => 'reject', 'uses' => 'TestimonialController@delete']);
	$route->post('testimonios', ['as' => 'addTestimonial', 'uses' => 'TestimonialController@store']);

	$route->post('add-slider', ['as' => 'slider', 'uses' => 'HomeController@upload']);
	$route->put('change-status-picture/{id}', ['as' => 'changePictureStatus', 'uses' => 'HomeController@changeStatusPicture']);
	$route->delete('delete-picture/{id}', ['as' => 'deletePicture', 'uses' => 'HomeController@deletePicture']);
	$route->post('change-picture-order', ['as' => 'changeOrder', 'uses' => 'HomeController@changeOrder']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
