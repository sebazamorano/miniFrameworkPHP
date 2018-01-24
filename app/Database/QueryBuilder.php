<?php
namespace Mini\Database;

use PDO;

class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $conn
     */
    public function __construct(PDO $conn)
    {
        $this->pdo = $conn;
    }

    public function getAll()
    {
        $query = $this->pdo->prepare('select * from tasks');
        $query->execute();
        return $query->fetchAll();
    }
}