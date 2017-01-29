<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about'); // will return about.blade.php
});

Route::get('index', 'BookController@index');

Route::post('books', 'BookController@create');

Route::get('books/{book}', 'BookController@show');

Route::post('books/{book}/notes', 'NotesController@store');

Route::get('books/{book}/delete', 'BookController@delete');

Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');
