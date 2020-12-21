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
    'signin' => 'pages/signin',
    'signup' => 'pages/signup',
    'signout' => 'user/signout',




    '.*' => 'pages/p404',
);