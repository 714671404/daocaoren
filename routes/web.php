<?php

namespace snoweddy\src\route;



Route::get('/', 'home\HomeController@index');

Route::get('article/{id}', 'article\ArticleController@show');

Route::get('login', 'auth\LoginController@show');
Route::get('register', 'auth\RegisterController@show');
Route::post('register', 'auth\RegisterController@register');

Route::get('test', 'auth\RegisterController@test');
Route::post('test', 'auth\RegisterController@test');

Route::get('/user', function() {
    $username = $_GET['username'];
    $user = new \app\http\models\User();
    return [
    ];
});