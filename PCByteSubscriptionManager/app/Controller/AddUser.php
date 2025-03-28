<?php

namespace Controller;
require '../app/core/Model.php';
require_once '../app/core/config.php';

use Controller;
use Model;

session_start();
class AddUser extends Controller
{
    use Model;
    public function index(){
        $error = '';
        $success = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $full_name = $_POST['full_name'];
            $sex = $_POST['sex'];
            $birth_date = $_POST['birthdate'];
            $contact_number = $_POST['contact'];



            // Ensure randomness on each execution
            mt_srand(time() + rand());

// Define available profile images
            $profileImages = [
                'Profile1.png',
                'Profile2.png',
                'Profile3.png'
            ];

// Randomly select one image
            $randomImage = $profileImages[array_rand($profileImages)];

            $imagePath = ROOT . '/assets/images/' . $randomImage;
            $imageBase64 = base64_encode(file_get_contents($imagePath));

            if ($this->validateUsername($username)) {
                $error = 'Username already exists';
            } else {
                $this->insertUser($username, $password, $role);
                $id = $this->getUserID($username);
                $this->insertUserInfo($id['user_id'], $full_name, $sex, $birth_date, $contact_number, $imageBase64);
                $success = 'User added successfully';
            }

        }

        $data = [
            'error' => $error,
            'success' => $success,
        ];

        $this->loadViewWithData('addUser', $data);
    }
}

$addUser = new AddUser();
$addUser->index();