<?php

namespace snoweddy\src\route;



Route::get('/', 'home\Home@index');

Route::get('article/{id}', 'article\Article@show');

Route::get('login', 'auth\Login@show');
Route::post('login', 'auth\Login@login');
Route::get('register', 'auth\Register@show');
Route::post('rgetegister', 'auth\Register@register');
Route::get('logout', 'auth\Register@logout');

Route::get('test', function() {
    dd(date("Y-m-d", time()));
});
Route::post('test', 'auth\Register@test');

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


Route::get('article/create', 'article\Article@create');
Route::post('article/store', 'article\Article@store');
Route::post('uploads', 'Article\Article@upload');

Route::get('test', 'test\Test@index');

// https://www.cnblogs.com/wjm956/p/9449147.html