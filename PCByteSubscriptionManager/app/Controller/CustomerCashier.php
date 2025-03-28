<?php

namespace Controller;

use Controller;
session_start();
class CustomerCashier extends Controller
{
    public function index()
    {
        $this->loadView('customerCashier');
    }
}

$cashier = new CustomerCashier();
$cashier->index();