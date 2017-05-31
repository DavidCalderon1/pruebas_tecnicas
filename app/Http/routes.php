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

Route::get('welcome', function () {
    return view('welcome');
});


// direcciona al metodo 'index' del controlador HomeController
Route::get('/',['as' => 'inicio','uses' => 'HomeController@index']);


//ruta para la opcion de 'Forms -> Formulario': wizard
Route::resource('wizard', 'WizardController');

//ruta para la opcion de 'Tables -> Tabla de resultados': datatables
Route::resource('datatables', 'DatatablesController');
