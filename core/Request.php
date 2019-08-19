<?php

class Request
{
    public static function uri()
    {
        $uri = '/php-practice/PHP-Practitioner/';
        $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], (strlen($uri)));
        return $_SERVER['REQUEST_URI'];
    }
}
