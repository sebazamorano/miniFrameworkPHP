<?php
namespace Mini\Models;

use Mini\Database\{Connection, QueryBuilder};

class Model
{
    protected $query;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->query = new QueryBuilder(Connection::run());
    }
}