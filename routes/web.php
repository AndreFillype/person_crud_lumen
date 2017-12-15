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

$app->group(['prefix' => 'persons'], function() use($app) {
    $app->get('/', 'PersonsController@index');
    $app->post('/', 'PersonsController@insert');
    $app->get('/{id}', 'PersonsController@list');
    $app->put('/{id}', 'PersonsController@update');
    $app->delete('/{id}', 'PersonsController@delete');
});