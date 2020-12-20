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
        echo 'Page . ' . $id . '<br>';
        $result = $this->model->getPage($id);

        foreach ($result as $res) {
            echo '<ul>';
            foreach ($res as $key => $value) {
                echo '<li>' . $key . ' - ' . $value . '</li>';
            }
            echo '</ul>';
        }


    }

    public function post($id)
    {
        $result = $this->model->getPost($id);
        print_r($result);
    }
}