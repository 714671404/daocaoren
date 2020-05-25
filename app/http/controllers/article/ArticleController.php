<?php
namespace app\http\controllers\article;

use snoweddy\src\base\Controller;
use app\http\models\Article;
use snoweddy\src\library\Upload;

class ArticleController extends Controller
{
    /*
     * 初始化属性
     */
    protected $article;

    public function __construct()
    {
        $this->article = new Article();
        parent::__construct();
    }
	public function show($id)
	{
        $data = $this->article->select_article($id);
        if ($data) {
            return view('article/show', $data);
        } else {
            return view('error/404');
        }
	}
	
    public function create()
    {
        return view('article/create');
    }

    public function store()
    {
        $data = [
            'u_id' => $_POST['u_id'],
            'title' => $_POST['title'],
            'text' => $_POST['text']
        ];
        $result = $this->article->add($data);
        if ($result) {
            return redirect("/article/{$result}");
        } else {
            echo "<script>alert('发布失败');</script>";
            return view('/article/create', $_POST);
        }
    }

    public function upload()
    {
        return Upload::upload_image($_FILES['file'], '/upload');
    }
}