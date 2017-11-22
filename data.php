<?php 
$servername = 'localhost';
$dbpass = '';
$dbname ='site perso';
$username ='root';

define ('DBSERVER', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define ('DBNAME', 'site perso');

$connection =  mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME);

if(!$connection){
	die("vous ete pas connecte");
}

else{
	echo "vous ete connecte <br/>";
}

?>