<?php

namespace Controller;
require '../app/core/Model.php';

use Controller;
use Model;

session_start();

class CashierProfile extends Controller
{
    use Model;
    public function index(){
        $id = $_SESSION['user_id'];
        $result = $this->getUserInfo($id);
        $name = $result['name'];
        $sex = $result['sex'];
        $birthday = $result['birth_date'];
        $contact = $result['contact'];

        $result = $this->getUser($id);

        $data = [
            'name' => $name,
            'sex' => $sex,
            'birthday' => $birthday,
            'contact' => $contact,
            'username' => $result['username'],
            'role' => $result['role'],
        ];


        $this->loadViewWithData('cashierProfile', $data);
    }
}

$cashierProfile = new CashierProfile();
$cashierProfile->index();