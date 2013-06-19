<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
// creamos ruta authtest y creamos FILTRO before indicamos que antes tiene que cumplir filtro auth.basic (pase usario y contra)

Route::get('/authtest', array('before' => 'auth.basic', function()
{
	return View::make('hello');
}));