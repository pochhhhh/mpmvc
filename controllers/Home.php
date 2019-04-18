<?php



	class Home extends Database
	{

		public function __construct()
		{

			if($_SERVER['REQUEST_URI'] === '/'){


				$this -> allNotes();
				$data = $this -> data;
				$notes = $data;
				$this -> view($notes);

			}


		}

		public function view($notes)
		{

			require_once 'views/notes.view.php';


		}


	}

	$home = new Home();
	//$home -> allNotes();


	