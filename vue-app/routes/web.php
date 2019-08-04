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

Route::prefix('/test')->group(function () {
    Route::view('multiple-modal', 'test.multiple-modal');
});

Route::prefix('/episodes')->group(function () {
    Route::view('23', 'episodes.23');
    Route::view('24', 'episodes.24');
    Route::view('25', 'episodes.25');
    Route::view('33', 'episodes.33');
    Route::view('34', 'episodes.34');
    Route::view('35', 'episodes.35');
    Route::view('39', 'episodes.39');
    Route::view('40', 'episodes.40');
    Route::view('42', 'episodes.42');
});

Route::post('/contact', 'ContactController@store');
Route::get('/faq', 'QuestionController@index');
