<?php

namespace Mini\Models;


class ToDo extends Model
{
    protected $name = 0;

    public function all()
    {
        return $this->query->getAll('tasks');
    }
}