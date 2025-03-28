<?php

namespace Controller;

use Controller;
session_start();
class AddCustomer extends Controller
{
    public function index(){
        $error = $success = ""; // Initialize variables
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = trim($_POST['full_name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $address = trim($_POST['address']);

            // Validate input
            if (empty($fullName) || empty($email) || empty($phone) || empty($address)) {
                $error = "All fields are required!";
            } else {
                // Process form submission (You should insert data into the database here)
                // Example:
                // $stmt = $pdo->prepare("INSERT INTO customers (full_name, email, phone, address) VALUES (?, ?, ?, ?)");
                // $stmt->execute([$fullName, $email, $phone, $address]);
                $success = "Customer added successfully!";
            }
        }
        $data = [
            "success" => $success,
            "error" => $error
        ];
        $this->loadViewWithData('addCustomer', $data);
    }
}

$addCustomer = new AddCustomer();
$addCustomer->index();