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
        $this->view('article/show', $data);
	}
	
    public function create()
    {
        $this->view('article/create');
    }

    public function store()
    {
        $data = $this->article->add($_POST);
        if ($data) {
            $this->redirect("/article/{$data}");
        }
    }

    public function upload()
    {
        return Upload::upload_image($_FILES['file'], '/upload');
    }
}