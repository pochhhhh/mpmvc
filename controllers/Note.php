<?php


    class Note
    {

        private $host = 'localhost';
        private $user = 'root';
        private $password = 'root';
        private $dbname = 'MPMVC';
        private $PDOConnect;
        

        //This controller is activated when a user adds a note to the database
        //User can add note and remove note
        //Include two methods that either add note to DB or remove note from DB
        //Use PDO to add the note to DB
        /*First, try to establish a DB connection. Then var dump everything. Add/Delete after */

        
        public function connect(){

            $DSN = 'mysql:host='.$this ->host.';dbname='.$this -> dbname;
      

            try{

                $this -> PDOConnect = new PDO($DSN, $this -> user, $this -> password);

            } catch(PDOException $e){

                die('connection unsuccessful');


            }

            $statement = $this -> PDOConnect;

            $statement = $statement -> prepare('select * from Notes');

            $statement -> execute();

            var_dump($statement -> fetchAll());

        }

        public function showNotes(){



        }


        
        public function addNoteToDB(){





        }

        public function deleteNoteFromDB(){



            
        }







    }


    if(strlen($_SERVER['QUERY_STRING']) > 8){

        $newNote = $_GET['addnote'];

        echo $newNote;


        $noteController = new Note;
        $noteController -> connect();
        $noteController -> showNotes();

        //pass $newNote and store it in the database

        //var_dump($statement -> fetchAll());

        //require '../database.php';

        //Add $newNote to DB;

    }


