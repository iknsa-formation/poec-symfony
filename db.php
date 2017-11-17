<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poec";



define('DBSERVER', 'localhost');

define('DBNAME', 'poec');

define('DBUSER','root');

define('DBPASS','');
    
//$connection = new mysqli($servername, $username, $password, $dbname);
$connection = mysqli_connect (DBSERVER, DBUSER, DBPASS, DBNAME);
    
if (!$connection) {
    die('<strong>Impossible de se connecter</strong><br/>'.mysqli_connect_error());
} else {
    
echo '<strong> Tu es connecté! Hohahahoho</strong><br>';
}

?>