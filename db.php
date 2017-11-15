<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poec-symfony";

// Create connection

define('DBSERVER', 'localhost');
define('DBNAME', 'poec-symfony');
define('DBUSER', 'root');
define('DBPASS', '');

//$connection = new mysqli($servername, $username, $password, $dbname);
$connection = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);

    /* if (!$connection) {
        die('<strong> Impossible de se possible, veuillez revoir les accés</strong><br>');
    } else {

        echo '<strong> Super ! j\'ai réussi à me connecter à ma base de donnée </strong><br>';
    }*/
?>