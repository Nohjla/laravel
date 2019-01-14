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

Route::get('/', function () {
    return view('welcome');
});

// tasklist
Route::get('/tasklist','TaskController@showTask');
Route::post('/newtask','TaskController@addTask');
Route::delete('/taskdelete/{taskid}','TaskController@deleteTask');
Route::put('/taskupdate/{taskid}','TaskController@updateTask');
