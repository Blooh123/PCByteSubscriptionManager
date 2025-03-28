<?php

namespace Controller;

use Controller;
session_start();

class CustomerDetails extends Controller
{
    public function index(){
        $this->loadView('customerDetails');
    }
}

$customer = new CustomerDetails();
$customer->index();