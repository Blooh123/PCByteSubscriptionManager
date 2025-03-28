<?php



namespace Controller;
require '../app/core/Model.php';

use Controller;
use Model;

session_start();

class Login extends Controller
{
    use Model;
    public function index(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $validate =  $this->validateLogin($_POST['username'], $_POST['password']);
//            if($_POST['username'] === 'Admin' && $_POST['password'] === '12345'){
//                $uri = str_replace('/login', '/dashboard', $_SERVER['REQUEST_URI']);
//                header('Location: ' . $uri);
//                exit();
//            }else{
//                $_SESSION['error'] = "Username or Password is invalid";
//                $uri = str_replace('/login', '/login', $_SERVER['REQUEST_URI']);
//                header('Location: ' . $uri);
//            }

            if ($validate) {
                $id = $validate['user_id'];
                $role =  $validate['role'];
                $_SESSION['user_id'] = $id;
                $_SESSION['role'] = $validate['role'];
                $_SESSION['username'] = $validate['username'];
                $_SESSION['roles'] = ['SuperAdmin', 'Admin'];

                if ($role == 'SuperAdmin' || $role == 'Admin') {
                    // Replace 'login' with 'home'
                    $uri = str_replace('/login', '/dashboard', $_SERVER['REQUEST_URI']);
                    header('Location: ' . $uri);
                    exit();
                }elseif ($role == 'Cashier') {
                    $uri = str_replace('/login', '/cashier', $_SERVER['REQUEST_URI']);
                    header('Location: ' . $uri);
                    exit();
                }
            }else{
                $_SESSION['error'] = "Username or Password is invalid";
                $uri = str_replace('/login', '/login', $_SERVER['REQUEST_URI']);
                header('Location: ' . $uri);

            }
        }
        $this->loadView('login');

    }
}

$login = new Login();
$login->index();