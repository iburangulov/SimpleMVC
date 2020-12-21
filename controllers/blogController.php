<?php

use home\models\BlogModel;


class blogController
{

    private $model;

    public function __construct()
    {
        $this->model = new BlogModel();
    }

    public function index()
    {
        $this->page(1);
    }

    public function page($id)
    {
        $result = $this->model->getPage($id);
        $title = 'Page ' . $id;
        include_once VIEWS_PATH . 'posts/page.php';
            }

    public function post($id)
    {
        $result = $this->model->getPost($id);
        $title = 'Post ' . $id;
        include_once VIEWS_PATH . 'posts/single.php';
    }
}