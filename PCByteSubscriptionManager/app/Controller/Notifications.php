<?php

namespace Controller;

use Controller;
session_start();
class Notifications extends Controller
{
    public function index(){
        $this->loadView('notifications');
    }
}
$notification = new Notifications();
$notification->index();