<?php

namespace Controller;

use Controller;
session_start();
class AdminHome extends Controller
{
    public function index(){
        if (!isset($_SESSION['username']) || !$_SESSION['role'] == 'Admin') {
            $uri = str_replace('/dashboard', '/login', $_SERVER['REQUEST_URI']);
            header('Location: ' . $uri);
        }

        $this->loadView('adminHome');
    }
}

$adminHome = new AdminHome();
$adminHome->index();