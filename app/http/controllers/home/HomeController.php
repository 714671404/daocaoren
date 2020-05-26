<?php
namespace app\http\controllers\home;

use app\http\models\Article;
use snoweddy\src\base\Controller;

class HomeController extends Controller
{
    protected $article;
    public function __construct()
    {
        $this->article = new Article();
    }
    public function index()
    {
        return view('home/index');
    }

    public function show($id)
    {
        $result = $this->article->show($id);
        if ($result) {
            $data = [
                'status' => 200,
                'data' => $this->article->show($id)
            ];
        } else {
            $data = [
                'status' => 201,
                'data' => null
            ];
        }
        return response($data);
    }
}