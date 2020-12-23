<?php

use home\components\Route;
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
                $prevPage = $id;
                $currentPage = $id + 1;
                $nextPage = $id + 2;
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
            $prev = $id - 4;
            $next = $id + 4;
            if ($prev < 1) $prev = 1;
            if ($prev > $maxPage) $prev = $maxPage;

            $title = 'Page ' . $id;
            include_once VIEWS_PATH . 'posts/page.php';
        } else Route::redirect('/blog');

    }

    public function post($id)
    {
        $result = $this->model->getPost($id);
        if ($result) {
            $title = 'Post ' . $id;
            include_once VIEWS_PATH . 'posts/single.php';
        } else Route::redirect('/blog');
    }
}