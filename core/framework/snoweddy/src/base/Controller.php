<?php
namespace snoweddy\src\base;

class Controller
{
    /*
     * 属性初始化
     */
    private $_controller;
    private $_action;
    private $_view;

    public function __construct()
    {
        $this->_view = new View();
    }

    /*
     * 引用view的方法
     */
    protected function view($path, array $data = [])
    {
        return $this->_view->view($path, $data);
    }
    protected function redirect($uri)
    {
        return $this->_view->redirect($uri);
    }
}