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

/*Создаем роутер с именем hello результат будет отображен в view с именем hello*/
Route::get('hello', function () {
    $tasks = [
      'add tasks',
        'find',
        'riew'
    ];
    return view('hello', compact('tasks'));
});


