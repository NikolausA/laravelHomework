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

Route::get('/start.html', function () {
    $name = request()->has('name') ? request()->get('name') : null;
    if(is_null($name)) {
        return "Enter your name";
    }
    echo "<h1>Hello $name</h1>";
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/greeting', 'NewsController@hello')->name('news.hello');
    Route::get('/category', 'NewsController@category')->name('news.category');
    Route::get('/{category}', 'NewsController@newsByCategory')->name('news.bycategory');
    Route::get('/category/{id}', 'NewsController@newsById')->name('news.byid');
});

Route::get('/auth', 'AuthController@index');
//Route::get('/news.html', function () {
//   echo "<p>Эксперты Palo Alto Networks подготовили отчет о малвари Lucifer, которая использует множество эксплоитов и, по словам           специалистов, «сеет хаос» на Windows-хостах. Отмечается, что сами авторы вредоноса дали своему детищу имя Satan DDoS, но ИБ-       специалисты называют его Lucifer, чтобы отличать шифровальщика Satan.
//
//         <br>Ботнет Lucifer привлек внимание исследователей после многочисленных инцидентов, связанных с эксплуатацией критической уязвимости CVE-2019-9081 во фреймворке Laravel, которая может привести к удаленному выполнению произвольного кода.</p>";
//});
