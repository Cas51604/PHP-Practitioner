<?php

class Request
{
    public static function uri()
    {
        $uri = '/';
        $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], (strlen($uri)));

        return $_SERVER['REQUEST_URI'];
    }
}
