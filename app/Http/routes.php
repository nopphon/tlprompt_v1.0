<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::auth();

Route::get('api/search/{term}', function ($term) {
	return[
		'results' => $term
	];
})->middleware('throttle:3'); // 3 request per minute

Route::get('/','HomeController@index');
Route::resource('login', 'LoginController');
Route::resource('register','RegisterController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => 'manager', function(){

	return 'This page only viewed by managers your is manager can viewed this page';
}]);