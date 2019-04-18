<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Notekeeper</h1>
    <p>You can use this application to save and delete notes</p>
    <form action="controllers/Note.php" method="get">
        <input type="text" name="addNote" placeholder="Add a note">
        <button type="submit">Save Note</button> 
    </form>
    <h2>My notes below:</h2>
    <ul>

    <?php 

    //Grab all data from database and pass into view as $notes

        for($i = 0; $i < count($notes); $i++){  ?>

        <li style="list-style: none;">
            <div>
                <form action="controllers/Note.php" method="GET">
                    <p><?php print_r($notes[$i] -> note);?></p>
                    <!--<input type="text" name="change" placeholder="<?php echo $notes[$i] -> note; ?>">-->
                    <!--<button type="submit" name='update'>Update Note</button>-->
                    <button type="submit" name='delete' value="<?php echo $notes[$i] -> note;?>">Delete Note</button>
                </form>
            </div>
        </li>

    <?php

        } ?>

 </ul>


</body>
</html>