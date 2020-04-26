<?php

namespace snoweddy\src\route;



Route::get('/', 'home\HomeController@index');

Route::get('article/{id}', 'article\ArticleController@show');

Route::get('login', 'auth\LoginController@show');
Route::post('login', 'auth\LoginController@login');
Route::get('register', 'auth\RegisterController@show');
Route::post('register', 'auth\RegisterController@register');
Route::get('logout', 'auth\RegisterController@logout');

Route::get('test', function() {
    dd(date("Y-m-d", time()));
});
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

Route::get('article/create', function() {
    view('article/create');
});


Route::post('uploads', 'Article\ArticleController@upload');

// https://www.cnblogs.com/wjm956/p/9449147.html