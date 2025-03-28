<?php

namespace Controller;

use Controller;

class CustomerLayoutController extends Controller
{

    public function indexAction(){
        $this->loadView('customerLayout');
    }

}

$customerLayoutController = new CustomerLayoutController();
$customerLayoutController->indexAction();