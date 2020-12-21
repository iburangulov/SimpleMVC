<?php

class pagesController
{
    public function home() {
        $title = 'Home';
        include_once VIEWS_PATH . 'pages/home.php';
    }

    public function about() {
        $title = 'About';
        include_once VIEWS_PATH . 'pages/about.php';
    }

    public function contacts() {
        $title = 'Contacts';
        include_once VIEWS_PATH . 'pages/contacts.php';
    }

    public function signin() {
        $title = 'Sign In';
        include_once VIEWS_PATH . 'pages/signin.php';
    }

    public function signup() {
        $title = 'Sign Up';
        include_once VIEWS_PATH . 'pages/signup.php';
    }

    public function p404() {
        $title = '404 - Not found';
        include_once VIEWS_PATH . 'pages/404.php';
    }
}