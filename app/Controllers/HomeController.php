<?php
namespace Mini\Controllers;

use Mini\Models\ToDo;

class HomeController extends Controller
{
    public function index()
    {
        $hazlo = new ToDo();
        $toDo = $hazlo->all();

        $this->view('index', compact('toDo'));
    }
}