<?php

namespace Controller;
require_once '../app/core/Model.php';
use Controller;
use Model;

session_start();

class Users extends Controller {
    use Model;


    public function index() {

        if (!isset($_SESSION['username']) || !$_SESSION['role'] == 'Admin') {
            $uri = str_replace('/users', '/login', $_SERVER['REQUEST_URI']);
            header('Location: ' . $uri);
        }
        // Fetch all users
        $allUsers = $this->getAllUsers($_SESSION['username']);

        // Pass data to the view
        $data = [
            'users' => $allUsers,
        ];



        $this->loadViewWithData('users', $data);
    }
}


// Create instance and call index method
$users = new Users();
$users->index();
