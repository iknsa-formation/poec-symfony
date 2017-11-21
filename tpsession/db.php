<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcp";



define('DBSERVER', 'localhost');

define('DBNAME', 'dbcp');

define('DBUSER','root');

define('DBPASS','');

//$connection = new mysqli($servername, $username, $password, $dbname);
$connection = mysqli_connect (DBSERVER, DBUSER, DBPASS, DBNAME);

if (!$connection) {
    die('<strong>Oh non! Impossible de se connecter...</strong><br/>'.mysqli_connect_error());
} else {

    echo '<strong> You are connected to dbcp. Enjoy!</strong><br>';
}

?>