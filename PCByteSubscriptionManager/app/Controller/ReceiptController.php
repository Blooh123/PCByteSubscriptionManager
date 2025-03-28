<?php

namespace Controller;

use Controller;
session_start();

class ReceiptController extends Controller
{
    public function index(){
        $this->loadView('receipt');
    }
}

$receiptController = new ReceiptController();
$receiptController->index();