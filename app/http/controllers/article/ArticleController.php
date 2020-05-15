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
        $data = $this->article->first($id);
        $this->view('article/show', $data);
	}
	
    public function create()
    {
        $this->view('article/create');
    }

    public function store()
    {
        $result = $this->article->add($_POST);
        if ($result) {
            $this->redirect("/article/$result");
        }
    }

    public function upload()
    {
        return Upload::upload_image($_FILES['file'], '/upload');
    }
}