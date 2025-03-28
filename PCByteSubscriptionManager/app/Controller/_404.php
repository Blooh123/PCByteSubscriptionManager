<?php

namespace Controller;

use Controller;

class _404 extends Controller
{
    public function index(){
        $this->loadView('404');
    }
}

$unknown = new _404();
$unknown->index();
