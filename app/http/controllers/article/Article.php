<?php

namespace app\http\controllers\article;

use snoweddy\src\base\Controller;

class Article extends Controller
{
	public function show()
	{

	}
    public function create()
    {
        $this->view('article/create');
    }

    public function store()
    {
        dd($_POST);
    }

    /*
     * 图片上传
     */
    public function upload()
    {
        /*
         * 初始化属性
         */
        $file = $_FILES['file'];
        if ($file["error"] == 0) {
            // 成功
            // 判断传输的文件是否是图片，类型是否合适
            // 获取传输的文件类型
            $typeArr = explode("/", $file["type"]);
            if($typeArr[0]== "image"){
                // 如果是图片类型
                $imgType = array("png","jpg","jpeg");
                if(in_array($typeArr[1], $imgType)){ // 图片格式是数组中的一个
                    // 类型检查无误，保存到文件夹内
                    // 给图片定一个新名字 (使用时间戳，防止重复)
                    // date("Y-m-d", time())以当天时间错查询是否存在这个文件，存在放到文件内，不存在则创建
                    $imgname = "/upload/".time().".".$typeArr[1];
                    // 将上传的文件写入到文件夹中
                    // 参数1: 图片在服务器缓存的地址
                    // 参数2: 图片的目的地址（最终保存的位置）
                    // 最终会有一个布尔返回值
                    $bol = move_uploaded_file($file["tmp_name"], APP_PATH . '/public/' . $imgname);
                    if($bol){
                        echo response([
                            'errno' => 0,
                            'url' => $imgname
                        ]);
                    } else {
                        echo "上传失败！";
                    };
                };
            } else {
                // 不是图片类型
                echo "没有图片，再检查一下吧！";
            };
        } else {
            // 失败
            echo $file["error"];
        }
    }
}