<?php
/**
 * Created by PhpStorm.
 * User: sebazamorano
 * Date: 23-01-18
 * Time: 21:40
 */

namespace Mini;


class Request
{
    protected $uri;

    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}