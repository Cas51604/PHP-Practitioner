<?php

class Request
{
    public static function uri()
    {
        $uri = '/PHP-Practice';
        $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], (strlen($uri)));
    }
}
