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
Route::match(['get', 'post'],'/teste', 'WelcomeController@teste');
Route::get('home', 'HomeController@index');

Route::group(array('prefix' => 'adm'), function()
{
//padrão restfull rails
//Route::get('home2', 'Adm\ImovelController@index');
//
//	Route::get('imoveis', 'Adm\ImovelController@index');
//	Route::get('imoveis/create', 'Adm\ImovelController@create');
//	Route::get('imoveis/{id}', 'Adm\ImovelController@show');
//	Route::get('imoveis/{id}', 'Adm\ImovelController@edit');
//	Route::post('imoveis', 'Adm\ImovelController@store');
//	Route::post('imoveis/{id}', 'Adm\ImovelController@update');

// recurso do rails
Route::resource('imoveis', 'Adm\ImovelController');
});
Route::controllers([
	'welcome' => 'WelcomeController',
]);
Route::controllers([
	'imovel' => 'Adm\ImovelController',
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
