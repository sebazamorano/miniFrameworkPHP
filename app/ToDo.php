<?php
namespace Mini;

use Mini\Database\QueryBuilder;
use Mini\Database\Connection;

class ToDo {
    public static function getAll()
    {
        $query = new QueryBuilder(Connection::run());
        return $query->getAll();
    }
}