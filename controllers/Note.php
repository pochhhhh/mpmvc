<?php

    require_once '../database.php';


    class Note extends Database
    {

        public function __construct()
        {

            $uri = $_SERVER['REQUEST_URI'];
            $uriAdd = substr($_SERVER['REQUEST_URI'], 22, 7);
            $uriDelete = substr($_SERVER['REQUEST_URI'], 0, 37);
            $uriUpdate = [substr($uri, 0, 29), substr($uri, strlen($uri) - 7, strlen($uri))];
            $uriNew = explode('/', $uri);
            //var_dump($uriNew);


            /* Here is where you will pass note onto the database through your database connection, which Note class extends to */

            if($uriAdd === 'addNote'){

                $this -> addNote($_REQUEST);

                require_once '../views/goback.view.php';


            }

            if($uriUpdate[0] === '/controllers/Note.php?change='){

    
                $this -> updateNote($previousNote, $_REQUEST['change']);

                require_once '../views/goback.view.php';


            }

            if(substr($_SERVER['REQUEST_URI'], 0, 29) === '/controllers/Note.php?delete='){

                $this -> deleteNote($_REQUEST['delete']);

                require_once '../views/goback.view.php';


            } else {


               //echo '<br>'.substr($_SERVER['REQUEST_URI'], 0, 29);


             }


        //VIEW



        }


        public function view()
        {

            require_once '../views/notes.view.php';


        }



    }

    $note = new Note();
