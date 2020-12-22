<?php

use home\models\BlogModel;


class blogController
{
    private $model;

    public function __construct()
    {
        $this->model = new BlogModel('posts');
    }

    public function index()
    {
        $this->page(1);
    }

    public function page($id)
    {
        $result = $this->model->getPage($id, 10);
        if ($result)
        {
            $title = 'Page ' . $id;
            include_once VIEWS_PATH . 'posts/page.php';
        } else $this->index();
    }

    public function post($id)
    {
        $result = $this->model->getPost($id);
        if ($result)
        {
            $title = 'Post ' . $id;
            include_once VIEWS_PATH . 'posts/single.php';
        } else $this->index();
    }
}