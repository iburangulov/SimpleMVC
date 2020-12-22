<?php

use home\models\BlogModel;


class blogController
{
    private $model;
    private $postsOnPage;

    public function __construct()
    {
        $this->model = new BlogModel('posts');
        $this->postsOnPage = 10;

    }

    public function index()
    {
        $this->page(1);
    }

    public function page($id)
    {
        $tableCount = $this->model->getNumOfPosts();
        $maxPage = ceil($tableCount / $this->postsOnPage);

        if ($id >= 1 AND $id <= $maxPage)
        {
            $result = $this->model->getPage($id, $this->postsOnPage);
            if ($id <= 1)
            {
                $prevPage = 1;
                $currentPage = 2;
                $nextPage = 3;
            } elseif ($id >= $maxPage)
            {
                $prevPage = $maxPage - 2;
                $currentPage = $maxPage - 1;
                $nextPage = $maxPage;
            } else {
                $prevPage = $id - 1;
                $currentPage = $id;
                $nextPage = $id + 1;
            }
            $title = 'Page ' . $id;
            include_once VIEWS_PATH . 'posts/page.php';
        } else {
            header('Location: /blog/page/1');
        }
    }

    public function post($id)
    {
        $result = $this->model->getPost($id);
        if ($result) {
            $title = 'Post ' . $id;
            include_once VIEWS_PATH . 'posts/single.php';
        } else $this->index();
    }
}