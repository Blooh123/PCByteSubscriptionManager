<?php

namespace Controller;

use Controller;
session_start();
class Customer extends Controller
{
    public function index(){
        if (!isset($_SESSION['username']) || !$_SESSION['role'] == 'Admin') {
            $uri = str_replace('/customer', '/login', $_SERVER['REQUEST_URI']);
            header('Location: ' . $uri);
        }
        $this->loadView('customers');
    }
}

$customer = new Customer();
$customer->index();