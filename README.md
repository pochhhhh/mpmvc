# mpmvc

  This project is a notepad application that I tried to build using my own MVC architecture. The project remains unstyled as I focused solely on the backend code.

  How to use:

  Set up a database on localhost with the following DB credentials:

  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'root');
  define('DB_NAME', 'MPMVC');

  Quick briefing:

  The idea is to be able save and delete notes and also view saved notes from the database.

  I followed conventional MVC architecture as much as possible and tried to go with the approach of
  using the Notes controller to handle DB requests using PDO. I did not feel it was necessary to use a
  dedicated model in this instance since I tried to implement all my database logic from within the Notes
  controller.

  The idea of launching the core MVC starts from the index.php file, which then loads a bootstrap which contains the main MVC files and controller. The bootstrap file also loads a dedicated router class, which is supposed to take a request from the form submitted in the view and send that to the controller.

  The problem that I had was that I set up my file structure to initialise the database class once index.php required the bootstrap file. When trying to submit data into the input and send the get request to the Notes controller, I could not successfully connect or add the newly submitted data into the database. I had problems creating a relationship between the client and the database after the form was submitted. I tried to instantiate the database again from with the Notes controller but this led to the browser crashing, perhaps because of some infinite loop.

  I also found a problem with the defined constants that I declared in my bootstrap file. I had intended the defined constants to be used in the Notes controller, particularly when using the Notes controller to send the submitted data into the database. The defined constants were not registered in the Notes controller and I was unable to include it. I am aware that defined constants can only be declared once in an application so I had to resort to redeclaring the DB credentials as new variables from within the Notes controller. 
