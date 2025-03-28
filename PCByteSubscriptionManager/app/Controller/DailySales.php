<?php

namespace Controller;

use Controller;

class DailySales extends Controller
{
    public function index(){
        $this->loadView('dailySalesTable');
    }
}

$dailySales = new DailySales();
$dailySales->index();