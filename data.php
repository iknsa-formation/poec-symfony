<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'poec';

define('DBSERVER', 'localhost');
define('DBUSER', 'root');
define('DBPASS','');
define('DBNAME', 'poec');

$connection =  mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME);

if(!$connection){
	die('<strong>Impossible de se connecter,Veuillez revoir les accés</strong><br/>'.mysqli_connect_error());
}
else {
	echo '<srong>vous ete connecte</strong><br/>';
}
?>
