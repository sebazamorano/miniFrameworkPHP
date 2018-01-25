<?php
namespace Mini\Database;

use Mini\ToDo;
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

    public function getAll($table)
    {
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectAllBy($table, $where, $value, $condition = "=")
    {
        $query = $this->pdo->prepare("select * from {$table} where {$where} {$condition} {$value}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }
}