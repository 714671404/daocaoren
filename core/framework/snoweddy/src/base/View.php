<?php
namespace snoweddy\src\base;

class View
{
    protected $variable = [];
    protected $patterns = [
        'include' => '/@include\((.*)+\)/'
    ];

    /*
     * 分配变量并且引入视图
     */
    public function view($path, array $data = [])
    {
        extract($data);

        $template = VIEW . '/' . $path . '.php';
        $pattern = [];
        $data = [];

        //判断视图文件是否存在
        if (is_file($template)) {
            $template = file_get_contents($template);
            preg_match_all($this->patterns['include'], $template, $arr);
            foreach ($arr[0] as $val) {
                $str = '';
                if (strpos($val, '\'') !== false) {
                    $str = explode('\'', $val);
                } elseif (strpos($val, '\"') !== false) {
                    $str = explode('\"', $val);
                } else {
                    $str = false;
                }
                if ($str === false) {
                    die("文件{$str}不存在！");
                }

                $str = str_replace('.', '/', $str[1]);
                $pattern[] = $val;
                $data[] = file_get_contents(VIEW . '/' . $str . '.php')
                    ? file_get_contents(VIEW . '/' . $str . '.php')
                    : die(VIEW . '/' . $str . '.php-文件并不存在');
            }

            return $this->replace($pattern, $data, $template);
        } else {
            die("<h1 style='color: red;'>无法找到视图文件!</h1>");
        }
    }

    /*
     * 跳转路由
     */
    public function redirect($uri)
    {
        return header('location:' . $uri);
    }

    /*
	 * 替换字符
	 */
    public function replace($pattern, $data, $template)
    {
        return str_replace($pattern, $data, $template);
    }
}