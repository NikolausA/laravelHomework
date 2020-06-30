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

Route::get('/greeting.html', function () {
   echo "<p>Hi there,<br>Welcome to the news portal. It's going to start soon.</p>";
});

Route::get('/about.html', function () {
   echo "<p>We just collect some stuff from over the world and put it on the site.<br>Have a good time!</p>";
});

Route::get('/news.html', function () {
   echo "<p>Эксперты Palo Alto Networks подготовили отчет о малвари Lucifer, которая использует множество эксплоитов и, по словам           специалистов, «сеет хаос» на Windows-хостах. Отмечается, что сами авторы вредоноса дали своему детищу имя Satan DDoS, но ИБ-       специалисты называют его Lucifer, чтобы отличать шифровальщика Satan.

         <br>Ботнет Lucifer привлек внимание исследователей после многочисленных инцидентов, связанных с эксплуатацией критической уязвимости CVE-2019-9081 во фреймворке Laravel, которая может привести к удаленному выполнению произвольного кода.</p>";
});