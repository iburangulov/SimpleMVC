<?php


namespace home\models;
use home\components\DB;


class BlogModel
{

    private $table;

    public function __construct()
    {
        $this->table = 'posts';
    }


    //Получение определенного поста,
    public function getPost($id)
    {
        $item = DB::getById($this->table, $id);
        return $item;
    }


    //Получение определенной страницы
    public function getPage($id)
    {

        $postsOnPage = 10;

        $offset = ($id - 1) * $postsOnPage;
        $item = DB::getFromTo($this->table, $postsOnPage, $offset);
        return $item;
    }
}