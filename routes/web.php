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

Auth::routes();
Route::resource('post','PostController');
Route::post('post/changeStatus', array('as' => 'changeStatus', 'uses' => 'PostController@changeStatus'));
Route::post('post/changeStatus2', array('as' => 'changeStatus2', 'uses' => 'PostController@changeStatus2'));
Route::post('post/changeStatus3', array('as' => 'changeStatus3', 'uses' => 'PostController@changeStatus3'));
Route::post('post/changeStatus4', array('as' => 'changeStatus4', 'uses' => 'PostController@changeStatus4'));
Route::post('post/changeStatus5', array('as' => 'changeStatus5', 'uses' => 'PostController@changeStatus5'));
Route::post('post/changeStatus6', array('as' => 'changeStatus6', 'uses' => 'PostController@changeStatus6'));
Route::post('post/changeStatus7', array('as' => 'changeStatus7', 'uses' => 'PostController@changeStatus7'));
Route::post('post/changeStatus8', array('as' => 'changeStatus8', 'uses' => 'PostController@changeStatus8'));
Route::post('post/changeStatus9', array('as' => 'changeStatus9', 'uses' => 'PostController@changeStatus9'));
Route::post('post/changeStatus10', array('as' => 'changeStatus10', 'uses' => 'PostController@changeStatus10'));
Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', function(){
    return view('profile');
});

/* View Composer*/
View::composer(['*'], function($view){
    
    $user = Auth::user();
    $view->with('user',$user);    

});