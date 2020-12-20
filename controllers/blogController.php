<?php


class blogController
{

    public function index()
    {
        $this->page(1);
    }

    public function page($id)
    {
        echo 'Blog, page ' . $id;
    }

    public function post($id)
    {
        echo 'Blog, post ' . $id;
    }
}