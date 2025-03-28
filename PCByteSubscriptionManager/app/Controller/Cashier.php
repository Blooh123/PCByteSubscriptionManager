<?php

namespace Controller;

use Controller;
session_start();

class Cashier extends Controller
{
    public function index(){
        $this->loadView('cashierHome');
    }

}
$cashier = new Cashier();
$cashier->index();