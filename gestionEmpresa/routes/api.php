<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tutorg','tutorGeneralController@store');
Route::resource('/tutorg','tutorGeneralController');

Route::post('/tutore','tutorEspecificoController@store');
Route::resource('/tutore','tutorEspecificoController');

Route::post('/tutora','tutorAcademicoController@store');
Route::resource('/tutora','tutorAcademicoController');

Route::resource('/estudiante','estudianteController');
Route::post('/estudiante','estudianteController@store');

Route::resource('/empresa', 'empresaController');
Route::post('/empresa', 'empresaController@store');

Route::resource('/asgempresa', 'AsignarEmpresaController');
Route::post('/asgempresa', 'AsignarEmpresaController@store');