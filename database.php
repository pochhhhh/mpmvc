<?php

    class Database
    {

        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $dbname = DB_NAME;
        private $PDOConnect;

        //Connect to Database

        public function connect(){

            $DSN = 'mysql:host='.$this ->host.';dbname='.$this -> dbname;
      

            try{

                $this -> PDOConnect = new PDO($DSN, $this -> user, $this -> password);

            } catch (PDOException $e){

                die('did not connect');


            }

            $statement = $this -> PDOConnect;

            $statement = $statement -> prepare('select * from Notes');

            $statement -> execute();

            //var_dump($statement -> fetchAll());
        }




    }

    $database = new Database;
    $database -> connect();