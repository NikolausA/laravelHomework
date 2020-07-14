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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'NewsController@index')->name('allnews');
    Route::get('/greeting', 'NewsController@hello')->name('news.hello');
    Route::get('/categoryNews/{category}', 'NewsController@newsByCategory')->where('name', '[A-Za-z]+')->name('news.bycategory');
    Route::get('/{id}', 'NewsController@newsById')->where('id', '[0-9]')->name('news.byid');
    Route::get('/create', 'NewsController@create')->name('news.create');
    Route::post('/store', 'NewsController@store')->name('news.store');
});

Route::group(['prefix' => 'users'], function() {
    Route::get('/comments', 'UsersController@comments')->name('users.comments');
    Route::post('/addcomm', 'UsersController@addComm')->name('users.addcomm');
    Route::get('/data', 'UsersController@data')->name('users.data');
    Route::post('/getdata', 'UsersController@getData')->name('users.getdata');
});

Route::get('/auth', 'AuthController@index');
//Route::get('/news.html', function () {
//   echo "<p>Эксперты Palo Alto Networks подготовили отчет о малвари Lucifer, которая использует множество эксплоитов и, по словам           специалистов, «сеет хаос» на Windows-хостах. Отмечается, что сами авторы вредоноса дали своему детищу имя Satan DDoS, но ИБ-       специалисты называют его Lucifer, чтобы отличать шифровальщика Satan.
//
//         <br>Ботнет Lucifer привлек внимание исследователей после многочисленных инцидентов, связанных с эксплуатацией критической уязвимости CVE-2019-9081 во фреймворке Laravel, которая может привести к удаленному выполнению произвольного кода.</p>";
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/start.html', function () {
//    $name = request()->has('name') ? request()->get('name') : null;
//    if(is_null($name)) {
//        return "Enter your name";
//    }
//    echo "<h1>Hello $name</h1>";
//});
