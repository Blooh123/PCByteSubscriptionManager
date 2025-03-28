<?php

namespace Controller;

use Controller;
session_start();
session_unset();
session_destroy();

class Logout extends Controller
{
    public function index(){
        // Replace 'login' with 'home'
        $uri = str_replace('/logout', '/login', $_SERVER['REQUEST_URI']);
        header('Location: ' . $uri);
        $this->loadView('login');
    }
}

$logout = new Logout();
$logout->index();