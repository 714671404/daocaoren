<?php

namespace snoweddy\src\route;



Route::get('/', 'home\HomeController@index');

Route::get('article/{id}', 'article\ArticleController@show');

Route::get('login', 'auth\LoginController@show');
Route::post('login', 'auth\LoginController@login');
Route::get('register', 'auth\RegisterController@show');
Route::post('register', 'auth\RegisterController@register');
Route::get('logout', 'auth\RegisterController@logout');

Route::get('test', 'auth\RegisterController@test');
Route::post('test', 'auth\RegisterController@test');

// 验证账号是否存在
Route::get('/user', function() {
    $username = $_GET['username'];
    $user = new \app\http\models\User();
    $sql = sprintf('select username from users where username=\'%s\'', $username);
    $result = $user->where($sql)->first();
    // dd(count($result) === 0 ? false : true);
    return json_encode([
        'data' => count($result) === 0 ? false : true,
        'status' => 200
    ]);
});

Route::get('article', function() {
    view('article/create');
});
