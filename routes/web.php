<?php

return array(
    'blog' => 'blog/index',
    'blog/page' => 'blog/index',
    'blog/page/(\d+)' => 'blog/page/$1',
    'blog/(\d+)' => 'blog/post/$1',
    'blog.+' => 'blog/index',


    '' => 'pages/home',
    'about' => 'pages/about',
    'contacts' => 'pages/contacts',




    '.*' => 'pages/p404',
);