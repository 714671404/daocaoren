<?php

namespace app\http\controllers\article;

use snoweddy\src\base\Controller;

class ArticleController extends Controller
{
	public function show($id)
	{
		return $this->view('article/show');
	}
    public function create()
    {
        return $this->view('article/article_create', ['title' => '添加文章']);
    }

    public function store()
    {
        dd($_POST);
    }
}