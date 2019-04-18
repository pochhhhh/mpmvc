<?php


    class Database
    {

        protected $data;
        protected $dbHost = 'localhost';
        protected $dbUser = 'root';
        protected $dbPass = 'root';
        protected $dbName = 'MPMVC';

        public function __construct()
        {

            //echo '<br> You have called the Database class. Connect to the database here and fetch all your notes data.';

        }


        public function connect()
        {


            $DSN = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;



            try{

                $pdo = new PDO($DSN, DB_USER, DB_PASSWORD);


            } catch(PDOException $e){


                die('Connection unsuccessful <br>'.$e);

            }

        }

        public function allNotes()
        {

            $DSN = 'mysql:host='.$this -> dbHost.';dbname='.$this -> dbName;

            try {

                $pdo = new PDO($DSN, $this -> dbUser, $this -> dbPass);


            } catch (PDOException $e){


                die('Connection unsuccessful <br>'.$e);

            }

            //Shows all notes
        
            $statement = $pdo -> prepare("SELECT * FROM Notes");
            $statement -> execute();
            $this -> data = $statement -> fetchAll(PDO::FETCH_OBJ);


        }

        public function addNote($noteToBeAdded)
        {

            $DSN = 'mysql:host='.$this -> dbHost.';dbname='.$this -> dbName;
            $noteToBeAdded = implode($noteToBeAdded, "");

            try {

                $pdo = new PDO($DSN, $this -> dbUser, $this -> dbPass);


            } catch (PDOException $e){


                die('Connection unsuccessful <br>'.$e);

            }
        
            $statement = $pdo -> prepare("INSERT INTO `Notes` (`id`, `note`) VALUES (NULL, '$noteToBeAdded');");
            $statement -> execute();

            echo '<br>Added a new note</br>';


        }

       /* public function updateNote($previousNote, $noteToBeUpdated)
        {

            $noteToBeUpdated = $_REQUEST['change'];
            echo '<br>Updated note<br>';


        }*/

        public function deleteNote($noteToBeDeleted)
        {

            $noteToBeDeleted = $_REQUEST['delete'];

            echo $noteToBeDeleted;


            $DSN = 'mysql:host='.$this -> dbHost.';dbname='.$this -> dbName;


            try {

                $pdo = new PDO($DSN, $this -> dbUser, $this -> dbPass);

            } catch (PDOException $e){


                die('Connection unsuccessful <br>'.$e);

            }
        
            $statement = $pdo -> prepare("DELETE FROM `Notes` WHERE `note` = '$noteToBeDeleted'");
            $statement -> execute();



            echo '<br>Note deleted.<br>';


        }


}



