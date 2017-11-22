<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "application_php";

// Create connection

define('DBSERVER', 'localhost');
define('DBNAME','application_php');
define('DBUSER','root'); 
define('DBPASS','');

//$connection = new mysqli($servername, $username, $password, $db);

$connection = mysqli_connect(DBSERVER, DBUSER,  DBPASS, DBNAME);
//
	if (!$connection) {
		die('<strong> Impossible de se connecter, veuillez revoir les acces</strong><br>' .mysqli_connect_error());

	}else{

		//echo '<strong>Super! j\'ai réussi à me connecter à ma basse de données</strong>';
	}
//include 'exercise5.php';


?>
