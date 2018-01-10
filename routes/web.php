<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['middleware' => 'log'], function () use ($router) {
	$router->get('/', function () use ($router) {
	    return $router->app->version();
	});
		$router->group(['middleware' => 'auth'], function () use ($router) {
			$router->get('user', [
					'as' => 'user', 'uses' => 'UserController@index'
			]);
			
			$router->post('register', [
					'as' => 'register', 'uses' => 'UserController@register'
			]);
		});
	$router->post('login', [
			'as' => 'login', 'uses' => 'UserController@login'
	]);
	
	$router->post('forgot-password', [
			'as' => 'forgot-password', 'uses' => 'UserController@forgotPassword'
	]);
});
