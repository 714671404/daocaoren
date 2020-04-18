<?php

namespace snoweddy\src\route;


Route::get('/', 'home\HomeController@index');

Route::get('/article/{id}', 'article\ArticleController@show');

Route::get('login', 'auth\LoginController@show');
Route::get('register', 'auth\RegisterController@show');