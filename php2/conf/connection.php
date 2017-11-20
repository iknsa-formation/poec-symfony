<?php 

/* var methode:
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "poec symfony";
*/

/*const mehode:*/
define('DBSERVER','localhost');
define('DBNAME','poec-symfony');
define('DBUSER','root');
define('DBPASS','Capsule9Corp1');

// create connect
 $connection = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);

 	if (!$connection) {
 	die('<strong>connexion failled!</strong><img src="https://static6.depositphotos.com/1062085/540/i/950/depositphotos_5406753-stock-photo-touch-screen-tablet-with-error.jpg">'.mysqli_connect_error());
 	}
 	else{
 		/*echo "<strong>connexion succes!</strong>";*/
/* 		 header('Location: forms.php');
*/ 	}
 ?>

