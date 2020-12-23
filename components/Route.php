<?php
namespace home\components;

class Route
{
    public static function redirect(string $url)
    {
        $url = trim($url, '/');
        $header = 'Location: /' . $url;
        header($header);
    }
}