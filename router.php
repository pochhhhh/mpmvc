<?php

$routes = ['' => 'controllers/index.php'];


class Router
{

    public function __construct(){

        //echo 'router initiated';

        if($_SERVER['REQUEST_URI'] === '/mpnotes/'){

            require 'views/notes.view.php';


        }

        if($_SERVER['REQUEST_URI'] === 'mpnotes/?addnote='){

            echo 'hi';


        }

    }




}
