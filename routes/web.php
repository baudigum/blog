<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('crud','CrudsController');

Route::get('/create', 'CrudsController@create')->name('create');
Route::get('/edit/{id}', 'CrudsController@edit')->name('edit');

Route::get('/', function () {
    return view('welcome');
});

*/


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::group(['middleware' => ['auth']],function () {
Route::get('crud','CrudsController@index')->name('crud');
Route::post('/update/{id}','CrudsController@update')->name('update');
Route::post('/store','CrudsController@store')->name('store');
Route::get('/create', 'CrudsController@create')->name('create');
Route::get('/edit/{id}', 'CrudsController@edit')->name('edit');
Route::get('view' , 'CrudsController@show')->name('view');
Route::get('/filter' , 'CrudsController@filter')->name('filter');
Route::get('/destroy/{id}' , 'CrudsController@destroy')->name('destroy');
Route::get('/testing' , 'CrudsController@testing')->name('testing');
});
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/', function () {
    return view('welcome');
});
