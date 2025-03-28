<?php

namespace Controller;

use Controller;
session_start();
class TransactionController extends Controller
{
    public function index(){
        $this->loadView('transaction');
    }
}

$transaction = new TransactionController();
$transaction->index();