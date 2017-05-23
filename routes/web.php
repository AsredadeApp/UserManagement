<?php

use App\Group ;
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

//    $Group = new App\Group;
//    $Group = $Group->find(67) ;
//    var_dump($Group->users->toArray()) ;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

