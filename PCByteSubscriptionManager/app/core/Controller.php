<?php


class Controller
{
    public function loadView($view)
    {
        $filename = "../app/views/" . $view . ".php";
        if (file_exists($filename)) {
            require "../app/views/" . $view . ".php";
        } else {
            echo "View not found";
        }

    }

    public function loadViewWithData($view, $data = [])
    {
        $filename = "../app/views/" . $view . ".php";
        if (file_exists($filename)) {
            // Extract the data array into variables
            extract($data);
            require $filename;
        } else {
            echo "View not found";
        }
    }

    public function loadViewComponents($view)
    {
        $filename = "../app/views/Components/" . $view . ".php";
        if (file_exists($filename)) {
            require "../app/views/Components/" . $view . ".php";
        } else {
            echo "View not found";
        }
    }
}