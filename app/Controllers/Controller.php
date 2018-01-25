<?php
namespace Mini\Controllers;


use Mini\Database\Connection;
use Mini\Database\QueryBuilder;

class Controller
{
    public function view($name, $data = [])
    {
        extract($data);

        return require $_SERVER['DOCUMENT_ROOT'] . "/view/{$name}.php";
    }
}