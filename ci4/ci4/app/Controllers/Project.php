<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Project extends BaseController
{

    public function index()
    {
        /*
        if($this->session->get('login')) {
            echo "test";
        }*/

        echo view('templates/header');
        return view('todolist/project');
    }
}