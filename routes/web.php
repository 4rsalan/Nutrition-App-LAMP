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
/*
Route::get('/', function(){
    return view('master');
});
*/

Route::get('/', 'dataController@index');
Route::get('index.php', 'dataController@index');
Route::get('add', 'dataController@showAddPage');
Route::post('createEntry', 'dataController@store');
Route::post('/modify/{id}', 'dataController@edit');
Route::post('/delete/{id}', 'dataController@destroy');
Route::post('edit/{id}', 'dataController@update');

Route::get('register', function(){
    return view('register');
});

Route::get('login', function(){
    return view('login');
});

Route::post('LoggedIn', 'AccountController@login');
Route::post('signout', 'AccountController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
