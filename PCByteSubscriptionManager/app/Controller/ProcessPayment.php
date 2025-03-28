<?php

namespace Controller;

use Controller;
session_start();
class ProcessPayment extends Controller
{
    public function processPayment(){
        $this->loadView('process_payment');
    }
}
$processPayment = new ProcessPayment();
$processPayment->processPayment();