<?php


namespace home\models;
use home\components\DB;


class BlogModel extends Model
{

    public function getPost($id)
    {
        $item = DB::getById($this->table, $id);
        $responce = $item ? $item : false;
        return $responce;
    }

    public function getPage($id, $postsOnPage)
    {
        $offset = ($id - 1) * $postsOnPage;
        $item = DB::getFromTo($this->table, $postsOnPage, $offset);
        $responce = ($item) ? $item : false;
        return $responce;
    }

    public function getNumOfPosts()
    {
        $result = DB::tableCount($this->table);
        if ($result)
        {
            return $result;
        } else return false;
    }
}