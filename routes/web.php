<?php

namespace snoweddy\src\route;


Route::get('/', 'home\HomeController@index');

// 文章路由
Route::get('/article/create', 'article\ArticleController@create');
Route::post('/article/create', 'article\ArticleController@store');

Route::get('/dome', function () {
    return view('dome/dome');
});

Route::get('/test/ajax', 'IndexController@index');
Route::post('/api/test/ajax', 'IndexController@index');
Route::get('/test', function () {
    view('test/index', ['title' => 'test']);
});
Route::post('/test', function () {
    return json_encode([
        'data' => [$_POST['user'], $_POST['pass']],
        'statucCode' => 200
    ]);
});
