<?php
use \Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

// Route::get('/', 'WelcomeController@index');
Route::get('/', 'PagesController@index');
Route::post('sendmail', function (){
	Mail::send('emails.contact', [], function($message){
		$message->to('frkalderon@gmail.com')->subject('Correo de Contacto ARYA');
	});	
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
