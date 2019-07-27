<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Route::get('skills', function (){
//    return ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
//});

Route::get('projects/create', 'ProjectsController@create');
Route::post('projects', 'ProjectsController@store');

Route::view('/episodes/23', 'episodes.23');
Route::view('/episodes/24', 'episodes.24');
Route::view('/episodes/25', 'episodes.25');
Route::view('/episodes/33', 'episodes.33');
